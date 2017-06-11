<?php

namespace App\Jobs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Shopperholic\Entities\Role;
use Shopperholic\Entities\User;
use App\Mail\NewUserAccountMail;
use App\Mail\AdminRequestToPasswordResetMail;

class AddUserJob
{
    /**
     * @var Request
     */
    private $request;
    /**
     * @var User
     */
    private $user;
    /**
     * @var
     */
    private $isNewUserRegistration;
    /**
     * @var
     */
    private $shouldSendMailForPasswordReset;

    /**
     * Create a new job instance.
     *
     * @param Request $request
     * @param User $user
     */
    public function __construct(Request $request, User $user = null)
    {
        $this->request = $request;
        $this->user = $user ?? new User(['user_id' => $this->request->user()->id]);
        $this->isNewUserRegistration = $this->user->exists ? false : true;
        $this->shouldSendMailForPasswordReset = $this->request->get('reset_password', false);
    }

    /**
     * Execute the job.
     *
     * @return User
     */
    public function handle(): User
    {
        return $this->createOrUpdateUser();
    }

    /**
     * Create or update a user
     *
     * @return User
     */
    private function createOrUpdateUser(): User
    {
        foreach($this->user->getFillable() as $fillable) {
            if ($this->request->has($fillable)) {
                $this->user->{$fillable} = $this->request->get($fillable);
            }
        }

        if ($this->request->has('password')) {
            $this->user->password = $this->request->get('password');
        }

        $this->user->save();

        $this->attachRoles();

        $this->sendPasswordResetNotification();

        return $this->user;
    }

    /**
     * Attach roles to user
     */
    private function attachRoles()
    {
        $roles = Role::whereIn('name', collect($this->request->get('roles'))->pluck('name')->all())->get();

        $this->user->syncRoles($roles->pluck('id')->all());
    }

    /**
     * @return bool
     */
    private function sendPasswordResetNotification()
    {
        $mail = Mail::to($this->user);

        if ($this->isNewUserRegistration) {
            logger('Sending new user account created mail', ['recipient' => $this->user->email]);
            return $mail->queue(new NewUserAccountMail($this->user, $this->request->user()));
        }

        if ($this->shouldSendMailForPasswordReset) {
            logger('Sending password reset mail', ['recipient' => $this->user->email]);
            return $mail->queue(new AdminRequestToPasswordResetMail($this->user, $this->request->user()));
        }
    }
}
