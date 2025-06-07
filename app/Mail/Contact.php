<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public array $contactData;

    public function __construct(array $contactData)
    {
        $this->contactData = $contactData;
    }

    public function envelope(): Envelope
    {
        
        $subject = $this->contactData['title'];

        return new Envelope(
                subject: $subject,
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'mail.contact',
            with: [
                'contactData' => $this->contactData
            ]
        );
    }
}
