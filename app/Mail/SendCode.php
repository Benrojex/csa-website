<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendCode extends Mailable
{
    use Queueable, SerializesModels;

    public $one_time_code;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($_data)
    {
        $this->one_time_code=$_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.send-code');
    }
}
