<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class ExpiryCertificatMail extends Mailable
{
    use Queueable, SerializesModels;
    public $allExpiredCertif;

    /**
     * Create a new message instance.
     */
    public function __construct($allExpiredCertif)
    {
        $this->allExpiredCertif = $allExpiredCertif;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('admin@belajarobot.com', 'Monitoring PLC'),
            subject: 'Certificate Expired',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.sendemail',
            with: [
                'allExpiredCertif' => $this-> allExpiredCertif,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
