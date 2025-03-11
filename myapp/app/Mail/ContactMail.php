<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from(config('mail.from.address')) // Почта отправителя
        ->to('egorskorik398@gmail.com') // Почта получателя
        ->subject('Новое сообщение с сайта')
            ->view('emails.contact')
            ->with('data', $this->data);
    }
}
