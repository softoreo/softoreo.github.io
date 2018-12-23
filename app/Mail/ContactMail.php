<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    private $visitor;
    public function __construct($visitor)
    {   
        $this->visitor = $visitor;
    }

   
    public function build()
    {
        return $this->view('mail.send_mail')->withVisitor($this->visitor);
    }
}
