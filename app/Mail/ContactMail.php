<?php

// namespace App\Mail;

// use Illuminate\Bus\Queueable;
// use Illuminate\Mail\Mailable;
// use Illuminate\Mail\Mailables\Content;
// use Illuminate\Mail\Mailables\Envelope;
// use Illuminate\Queue\SerializesModels;

// class ContactMail extends Mailable
// {
//     use Queueable, SerializesModels;

//     public array $data;

    /**
     * Crée une nouvelle instance du message.
     */
    // public function __construct(array $data)
    // {
    //     $this->data = $data;
    // }

    /**
     * Définit l’enveloppe du mail (ex : sujet).
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: $this->data['objet'] ?? 'Message depuis le formulaire de contact',
    //     );
    // }

    /**
     * Définit la vue à utiliser pour le contenu du mail.
     */
    // public function content(): Content {
    //     return new Content(
    //         view: 'dashboard.client.email', // Assure-toi que ce fichier existe
    //         with: [
    //             'nom' => $this->data['nom'],
    //             'email' => $this->data['email'],
    //             'objet' => $this->data['objet'],
    //             'messageContent' => $this->data['message'],
    //         ],
    //     );
    // }

    /**
     * Pas de pièce jointe.
     */
    // public function attachments(): array
    // {
    //     return [];
    // }
// }
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject("Nouveau message : " . $this->data['objet'])
                    ->replyTo($this->data['email'], $this->data['nom'])
                    ->view('dashboard.client.email')
                    ->with('data', $this->data);
    }
}
