<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TwoFactorCodeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $code; // Variable to hold the 2FA code

    /**
     * Create a new message instance.
     *
     * @param  string  $code
     */
    public function __construct($code)
    {
        $this->code = $code; // Assign the 2FA code
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your Two-Factor Authentication Code')
                    ->view('emails.two_factor_code'); // Define the view to use for the email
    }
}
