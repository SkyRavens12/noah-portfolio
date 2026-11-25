<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param  array{full_name: string, email: string, phone: string, subject: string, message: string}  $contactData
     */
    public function __construct(public array $contactData) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [
                new Address($this->contactData['email'], $this->contactData['full_name']),
            ],
            subject: '[Portfolio Contact] '.$this->contactData['subject'],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-message',
        );
    }
}
