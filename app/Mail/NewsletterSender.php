<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterSender extends Mailable
{
    use Queueable, SerializesModels;

    public $emailNewsletter;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contentNewsletter)
    {
        $this->emailNewsletter = $contentNewsletter;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->emailNewsletter->emailNewsletter)->view('admin.newsletter.newsletter')->with(['newsletter' => $this->emailNewsletter->emailNewsletter]);
    }
}
