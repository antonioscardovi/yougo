<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $invitation;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $invitation)
    {
        $this->email = $email;
        $this->invitation = $invitation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->view('mails.registrationMail')->to($this->email);
    }

}


//Mail::send(['text' => 'mails.registrationMail'], ['name', 'Adminko - YouGo'], function ($message) {
//    $message->to('aljukicadis@yahoo.com', 'To Adis Aljukic')->subject('Registracija Novog Zaposlenika');
//    $message->from('rent.a.car.yougo@gmail.com', 'YouGo');
//});
