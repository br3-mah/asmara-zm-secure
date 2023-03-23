<?php

   
if (isset($_POST['submit'])){
    $to = "asmarahotelzam@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['username'];
    
    

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = 'You have a new subscriber or potential client.';

    $logo = '../../img/logo.png';
    $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong>You have a new subscriber or potential customer from {$name} , email addrress: {$from}</td></tr>";
	$body .= "<tr><td></td></tr>";
	//$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";
	
	
	if(mail($to, $subject, $body, $headers, $from)){
        echo json_encode(
            array(
                'ok' => true,
                'messages' => "success",
                'name' => $name

            )
           );
    }
    else { 
        echo json_encode(
            array(
                'ok' => false,
                'name' => $name
            )
          );
    }
}







































/*


 require '../phpmailer/PHPMailerAutoload.php';
 if(isset($_POST['submit'])){
  $email = $_POST["email"];
  $name = $_POST["username"];



    $mail = new PHPMailer();
    
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->Username   = 'theegreenweb@gmail.com';                     // SMTP username
    $mail->Password   = 'Greenweb.@123';          
    $mail->setFrom($email, $name);
    $mail->addAddress('reservation@asmarahotelzm.com'); //destinatinon email here
    $mail->Subject = 'Asmara chatbot optin';
    $mail->Body = 'You have a new subscriber or potential customer name:' .$name.', email addrress: '.$email.'.';
    
    if ($mail->send()){
        echo json_encode(
            array(
                'ok' => true,
                'messages' => "success",
                'name' => $name

            )
          );
    }else{
        echo json_encode(
            array(
                'ok' => false,
                'messages' => $mail->ErrorInfo,
                'name' => $name
            )
          );
    }     


  
 }

    */
?>