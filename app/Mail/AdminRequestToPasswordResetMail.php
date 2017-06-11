<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Shopperholic\Entities\User;

class AdminRequestToPasswordResetMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    /**
     * @var User
     */
    public $user;
    /**
     * @var User
     */
    public $admin;

    /**
     * Create a new message instance.
     *
     * @param User $user
     * @param User $admin
     */
    public function __construct(User $user, User $admin)
    {
        $this->user = $user;
        $this->admin = $admin;
    }

    /**
     * Build the message.
     *
     * @param PasswordBroker $broker
     * @return $this
     */
    public function build(PasswordBroker $broker)
    {
        $token = $broker->getRepository()->create($this->user);

        $this->subject = 'Password reset request';

        return $this->view('email.admin_password_request', compact('token'));
    }
}
