<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class GuestInquiryNotification extends Notification
{
    use Queueable;
    public $data;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Asmara Hotel Zambia | Booking Inquiry')
            ->line('Dear '.$this->data['name'])
            ->line('Thank you for submitting your booking inquiry with us. We have received your request and our team is currently reviewing it. We will get back to you as soon as possible with the details of your booking and any additional information you may need.')
            ->line('Room Type: '.$this->data['room_type'].' for '.$this->data['duration'].' Nights')
            ->line('Check In: '.$this->data['in'])
            ->line('Check Out: '.$this->data['out'])
            ->line('Total Billing: '.$this->data['bill'])
            ->line('Special Requests: '.$this->data['special_req'])
            ->line('Thank You.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'name' => $this->data['name'],
            'msg' => 'Your booking request has been successfully sent. Special Requests: '.$this->data['special_req'].' Room Type: '.$this->data['room_type'],
            'type' => $this->data['type'],
            'user_id' => $this->data['user_id'],
            'data_id' => $this->data['data_id']
        ];
    }
}
