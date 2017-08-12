<?php

declare(strict_types=1);

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class CorrespondenceEmail.
 */
class CorrespondenceEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var
     */
    public $body;

    /**
     * CorrespondenceEmail constructor.
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
     * @param string $string
     */
    public function setBody(string $string)
    {
        $this->body = $string;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.correspondence');
    }
}
