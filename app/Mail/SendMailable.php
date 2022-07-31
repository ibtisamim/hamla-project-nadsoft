<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $messageemail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name , $email , $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->messageemail = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('example@example.com')
            ->view('email')->with([
                'name' => $this->name,
                'message' => $this->messageemail,
            ]);

        /*
        return $this->view('email')->with([
            'name' => $this->name,
            'message' => $this->messageemail,
        ]);*/
    }
}
