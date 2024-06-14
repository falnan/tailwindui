<?php

namespace App\Mail;

use App\Models\Person;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Inertia\Inertia;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(
        public Person $person,
    ) {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Ade orang daftar',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mails.coba',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
