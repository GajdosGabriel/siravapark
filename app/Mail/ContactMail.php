<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable {
    use Queueable, SerializesModels;

    public $objRequest;

    public function __construct($objRequest) {
        $this->objRequest = $objRequest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this
            ->from($this->objRequest->email)
            ->replyTo($this->objRequest->email)
            ->subject('Šírava Park contact form')
            ->view('mails/contact')
            ->with('objRequest', $this->objRequest);
    }
}
