<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'Inquiry';
        $view = 'emails.contact';
        
    	return $this->subject($subject)->view($view);
    }
}
