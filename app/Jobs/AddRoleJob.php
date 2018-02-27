<?php

namespace App\Jobs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Shopperholic\Entities\Permission;
use Shopperholic\Entities\Role;
use Shopperholic\Exceptions\ConflictWithExistingRecord;

class AddRoleJob
{
    /**
     * @var Request
     */
    private $request;
    /**
     * @var Role
     */
    private $role;

    /**
     * Create a new job instance.
     *
     * @param Request $request
     * @param Role $role
     */
    public function __construct(Request $request, Role $role = null)
    {
        $this->request = $request;
        $this->role = $role ?? new Role([
            'name' => $this->request->get('display_name'),
            'user_id' => $this->request->user()->id
        ]);
    }

    /**
     * Execute the job.
     *
     * @return Role
     */
    public function handle(): Role
    {
        $this->checkIsNotExistingRole();

        return DB::transaction(function() {
            $this->createRole();

            if ($this->request->has('permissions')) {
                $perms = collect($this->request->get('permissions'))
                    ->map(function($perm) {
                        return Permission::whereName($perm)->first();
                    })
                    ->filter(function($rec) {
                        return !empty($rec);
                    });

                $this->role->permissions()->sync($perms->pluck('id')->all());
            }

            $this->role->save();

            return $this->role;
        });
    }

    public function createRole()
    {
        foreach($this->role->getFillable() as $fillable) {
            if ($this->request->has($fillable)) {
                $this->role->{$fillable} = $this->request->get($fillable);
            }
        }

        $this->role->userable_id = $this->role->userable_id ?? $this->request->user()->userable_id ?? null;
        $this->role->userable_type = $this->role->userable_type ?? $this->request->user()->userable_type ?? null;

        return $this->role->save();
    }

    public function checkIsNotExistingRole()
    {
        $role = Role::where([
            'name' => $this->role->name,
            'userable_id' => $this->request->user()->userable_id ?? null,
            'userable_type' => $this->request->user()->userable_type ?? null
        ])->first();

        if (empty($role) || $role->id === $this->role->id) {
            return false;
        }

        throw ConflictWithExistingRecord::fromModel($role);
    }
}
