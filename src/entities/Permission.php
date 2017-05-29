<?php

namespace Shopperholic\Entities;

use Laratrust\LaratrustPermission;
use Illuminate\Support\Collection;

class Permission extends LaratrustPermission
{
    /**
     * @var array
     */
    public $fillable = ['name', 'display_name', 'description', 'group_name', 'is_app_owner_permission', 'is_merchant_permission'];

    /**
     * @param array $permTypes
     *
     * @return Collection
     */
    public static function getGroupedPermissions(array $permTypes = []): Collection
    {
        $perms = Permission::when(!empty($permTypes), function($q) use ($permTypes) {
            return $q->where($permTypes);
        })->get();

        $groupedPermissions = collect([]);
        $perms->map(function(Permission $permission) use (&$groupedPermissions) {
            if (!$groupedPermissions->has($permission->group_name)) {
                $groupedPermissions->put($permission->group_name, collect([]));
            }

            $groupedPermissions->get($permission->group_name)->push($permission);

        });

        return $groupedPermissions;
    }

    /**
     * Get app owner permissions
     *
     * @return Collection
     */
    public static function getGroupedAppOwnerPermissions(): Collection
    {
        return self::getGroupedPermissions(['is_app_owner_permission' => 1]);
    }

    /**
     * Get merchant permissions
     *
     * @return Collection
     */
    public static function getGroupedMerchantPermissions(): Collection
    {
        return self::getGroupedPermissions(['is_merchant_permission' => 1]);
    }
}
