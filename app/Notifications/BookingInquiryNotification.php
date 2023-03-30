<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BookingInquiryNotification extends Notification
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
            ->subject('Asmara Booking Inquiry')
            ->line($this->data['msg'])
            ->line('Room Type: '.$this->data['room_type'])
            ->line('Special Requests: '.$this->data['special_req'])
            ->action('Manage Booking Inquiries', url('/booking-inquiries'))
            ->line('Administrator');
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
            'msg' => $this->data['msg'] .'. Special Requests: '.$this->data['special_req'].' Room Type: '.$this->data['room_type'],
            'type' => $this->data['type'],
            'user_id' => $this->data['user_id'],
            'data_id' => $this->data['data_id']
        ];
    }
}
