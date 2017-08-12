<?php

declare(strict_types=1);

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class ReplyConfirmReceiptEmail.
 */
class ReplyConfirmReceiptEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * ReplyConfirmReceiptEmail constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param string $fromEmailAddress
     * @param string $fromEmailName
     */
    public function setFromEmailAddress(string $fromEmailAddress, string $fromEmailName)
    {
        $this->from($fromEmailAddress, $fromEmailName);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.replyConfirmReceipt');
    }
}
