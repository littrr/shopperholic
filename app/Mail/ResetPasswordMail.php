<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Shopperholic\Entities\User;

class ResetPasswordMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    /**
     * @var User
     */
    private $user;
    /**
     * @var null
     */
    private $token;

    /**
     * Create a new message instance.
     *
     * @param User $user
     * @param null $token
     */
    public function __construct(User $user, $token = null)
    {
        $this->user = $user;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @param PasswordBroker $broker
     * @return $this
     */
    public function build(PasswordBroker $broker)
    {
        logger('Sending password reset request mail to ', ['recipient' => $this->user->email]);

        $token = $this->token ?: $broker->getRepository()->create($this->user);

        $this->subject = 'Password Reset Request';

        return $this->view('email.password', compact('token'));
    }
}
