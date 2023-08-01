<?php

namespace App\Console\Commands;

use App\Models\ReservationList;
use App\Models\User;
use Illuminate\Console\Command;

class VerifyEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:verify';
    protected $description = 'Verify email addresses';

    /**
     * The console command description.
     *
     * @var string
     */

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::whereNot('email', 'admin@asmarahotelzm.com')
        ->whereNot('email', 'frontoffice@asmarahotelzm.com')
        ->whereNot('email', 'info@asmarahotelzm.com')->get();

        foreach ($users as $user) {
            $email = $user->email;
            $result = $this->verifyEmail($user->email);
            $this->info($result);
            // Delete the user if the email mailbox does not exist
            if (strpos($result, 'Mailbox does not exist') !== false) {
                $user = User::where('email', $user->email)->first();
                if ($user) {
                    ReservationList::where('guests_id', $user->id)->delete();
                    $user->delete();
                    $this->info("User with email {$email} has been deleted.");
                }
            }else{
                $this->info("All users are real.");
            }
        }
    }

    function isDisposableEmail($email)
{
    $disposableDomains = ['example.com', 'example.org']; // Add more disposable domains as needed

    $domain = strtolower(substr(strrchr($email, '@'), 1));

    return in_array($domain, $disposableDomains);
}

function verifyEmail($email)
{
    // Step 1: Validate email format using regular expression
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email format.";
    }

    // Step 2: Check if domain exists using DNS lookup
    $domain = strtolower(substr(strrchr($email, '@'), 1));
    if (!checkdnsrr($domain, 'MX')) {
        return "Invalid domain name or domain does not exist.";
    }

    // Step 3: Check for disposable email addresses
    if ($this->isDisposableEmail($email)) {
        return "Disposable email addresses are not allowed.";
    }

    // Step 4: Connect to the email server and simulate sending a message to verify mailbox existence
    $timeout = 5; // Timeout in seconds

    $mxRecords = [];
    getmxrr($domain, $mxRecords);

    if (empty($mxRecords)) {
        return "No MX records found for the domain.";
    }

    $mxHost = $mxRecords[array_rand($mxRecords)];
    $socket = @fsockopen($mxHost, 465, $errno, $errstr, $timeout);

    if (!$socket) {
        return "Failed to connect to the mail server.";
    }

    stream_set_timeout($socket, $timeout);

    $response = fgets($socket);

    if (substr($response, 0, 3) !== '220') {
        return "Invalid response from the mail server.";
    }

    // Send a test message
    fputs($socket, "HELO example.com\r\n");
    fgets($socket);

    fputs($socket, "MAIL FROM: <verify@example.com>\r\n");
    fgets($socket);

    fputs($socket, "RCPT TO: <$email>\r\n");
    $response = fgets($socket);

    // Close the socket
    fputs($socket, "QUIT\r\n");
    fclose($socket);

    // Check if the mailbox exists based on the SMTP response
    if (substr($response, 0, 3) === '250') {
        return "Email address is valid and mailbox exists.";
    } elseif (substr($response, 0, 3) === '550') {
        return "Mailbox does not exist.";
    } else {
        return "Failed to verify the email address.";
    }
}
}
