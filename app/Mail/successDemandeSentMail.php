<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class successDemandeSentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $myUserData=[];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userData)
    {
        $this->myUserData= $userData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("service@e-dpep.com")
                    ->subject("Edpep status demande ")
                    ->view('mails.success-register-user',['userDataForEmailRister'=>$this->myUserData]) ///
                    ->attach(public_path("doc-pdf/doc-mirah.pdf"));
    }
}
