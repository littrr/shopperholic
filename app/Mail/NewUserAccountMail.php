<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Shopperholic\Entities\User;

class NewUserAccountMail extends Mailable implements ShouldQueue
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
        // Generate token for user
        $token = $broker->getRepository()->create($this->user);

        $shop = $this->user->userable ? $this->user->userable->name :
            ($this->admin->userable ? $this->admin->userable->name : null);

        $this->subject = $shop ?
            sprintf('Invitation to join %s on %s', $shop, config('app.name')):
            sprintf('Invitation to join %s', config('app.name'));

        return $this->view('email.new_user_account', compact('token'));
    }
}
