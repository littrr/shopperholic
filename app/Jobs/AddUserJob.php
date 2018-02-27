<?php

namespace App\Jobs;

use Illuminate\Http\Request;
use Shopperholic\Entities\User;

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
     * Create a new job instance.
     *
     * @param Request $request
     * @param User $user
     */
    public function __construct(Request $request, User $user = null)
    {
        $this->request = $request;
        $this->user = $user ?? new User(['user_id' => $this->request->user()->id]);
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

        return $this->user;
    }
}
