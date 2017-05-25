<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Shopperholic\Entities\User;
use Illuminate\Support\Facades\DB;

class CreateApplicationOwnerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'register:owner';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create application owner account';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $details = $this->getDetails();

        if ($user = $this->createAppOwner($details)) {
            $this->info('Application owner account created. Details: ');
            $this->info(print_r($details, 1));
        }
    }

    private function createAppOwner(array $details)
    {
        return DB::transaction(function() use($details){
            $user = $this->createOwnerHelper($details);
            $this->attachRoleToAppOwner($user);

            return $user;
        });
    }

    private function getDetails()
    {
        $details['name'] = $this->ask('Name');
        $details['email'] = $this->ask('Email');
        $details['contact_number'] = $this->ask('Phone Number');
        $details['password'] = $this->secret('Password');
        $confirmPassword = $this->secret('Confirm Password');

        while(!($this->isRequiredLength($details['password']) && $this->isMatch($details['password'], $confirmPassword))) {
            if (!$this->isRequiredLength($details['password'])) {
                $this->error('Password must be at least 8 characters long!');
            } else if (!$this->isMatch($details['password'], $confirmPassword)) {
                $this->error('Passwords don\'t match!');
            }

            $details['password'] = $this->secret('Password');
            $confirmPassword = $this->secret('Confirm Password');
        }

        return $details;
    }

    /**
     * @param array $details
     * @return User
     */
    private function createOwnerHelper(array $details): User
    {
        // Find the count of app owner, there should be only one app owner
        $count = User::whereIsAppOwner(true)->count();

        if ($count > 0) {
            $this->info('Application owner exists...');
            return null;
        }

        // Check if the user already exists
        $user = User::whereEmail($details['email'])->first();

        if (!empty($user) && !$user->isAppOwner()) {
            $this->error('Sorry! A non-application owner account with the given email exists');
            return null;
        }

        if (empty($user)) {
            $this->info('Creating new application owner account...');
            $user = new User();
        }

        if (!empty($user) && $user->isAppOwner()) {
            $this->info('Updating existing account...');
        }

        $user->email = $details['email'];
        $user->name = $details['name'];
        $user->contact_number = $details['contact_number'];
        $user->password = $details['password'];

        $user->is_app_owner = true;
        $user->is_account_owner = true;

        return tap($user)->save();
    }

    //todo: Attach owner role
    private function attachRoleToAppOwner(User $user)
    {
        //
    }

    /**
     * @param string $val
     * @return bool
     */
    private function isRequiredLength(string $val): bool
    {
        return strlen($val) >= 8;
    }

    /**
     * @param string $val
     * @param string $val1
     * @return bool
     */
    private function isMatch(string $val, string $val1): bool
    {
        return $val === $val1;
    }
}
