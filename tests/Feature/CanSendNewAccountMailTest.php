<?php

namespace Tests\Feature;

use App\Mail\AdminRequestToPasswordResetMail;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Shopperholic\Entities\User;
use Shopperholic\Entities\Role;
use App\Jobs\AddUserJob;
use App\Mail\NewUserAccountMail;

class CanSendNewAccountMailTest extends TestCase
{
    use DatabaseMigrations;

    public function test_can_send_mail_when_user_is_created()
    {
        Mail::fake();

        $this->authenticateUser();

        $user = factory(User::class)->make()->toArray();

        $roles = factory(Role::class, 2)->create();

        $this->request->merge(array_merge($user, ['roles' => $roles->toArray()]));

        $createdUser = dispatch(new AddUserJob($this->request));

        Mail::assertSent(NewUserAccountMail::class, function($mail) use($createdUser){
            return $mail->user->name === $createdUser->name;
        });
    }

    public function test_admin_can_send_password_request_mail()
    {
        Mail::fake();

        $this->authenticateUser();

        $user = factory(User::class)->create();

        $this->request->merge([
            'name' => 'Gabriel April',
            'reset_password' => true
        ]);

        $updatedUser = dispatch(new AddUserJob($this->request, $user));

        Mail::assertSent(AdminRequestToPasswordResetMail::class, function($mail) use($updatedUser){
            return $mail->user->name === $updatedUser->name;
        });
    }
}
