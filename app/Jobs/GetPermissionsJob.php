<?php

namespace App\Jobs;


use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Shopperholic\Entities\Permission;

class GetPermissionsJob
{
    /**
     * @var Request
     */
    private $request;

    /**
     * @var Request
     */
    private $user;

    /**
     * Create a new job instance.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->user = $this->request->user();
    }

    /**
     * Execute the job.
     *
     * @return \Illuminate\Support\Collection
     */
    public function handle(): Collection
    {
        if ($this->user->isAppOwner()) {
            return Permission::getGroupedAppOwnerPermissions();
        } else if ($this->user->isMerchantStaff()) {
            return Permission::getGroupedMerchantPermissions();
        }

        return collect();
    }
}
