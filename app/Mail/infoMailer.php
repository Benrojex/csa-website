<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class infoMailer extends Mailable
{
    use Queueable, SerializesModels;

protected $info_type;

public $subject;
public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($_subject,$_message, $_type=null)
    {
       $this->subject=$_subject;
       $this->msg=$_message;
       $this->info_type=$_type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->info_type=='download_link'){
            return $this->view('mail.download_link')
            ->with(['msg'=>$this->msg,'subject'=>$this->subject]);
        }

        /*if($this->info_type=='validate_email'){
             return $this->view('mail.info_mailer')
            ->with(['msg'=>$this->msg,'subject'=>$this->subject]);
        }*/

        return $this->view('mail.info_mailer')
        ->with(['msg'=>$this->msg,'subject'=>$this->subject]);
    }
}
