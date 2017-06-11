<?php

namespace Tests\Unit;

use Illuminate\Support\Collection;
use Shopperholic\Entities\Permission;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use PermissionsTableSeeder;

class PermissionTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();

        $this->seed();
    }

    public function getPermissionHelper($permData, $permType): Collection
    {
        $perms = collect($permData['permissions'])
            ->filter(function(array $perm) use ($permType) {
                return array_key_exists($permType, $perm) && $perm[$permType];
            });

        return collect(['group_name' => $permData['group_name'], 'permissions' => $perms]);
    }

    private function getUserManagementPermissions(string $permType): Collection
    {
        return $this->getPermissionHelper(PermissionsTableSeeder::getUserManagementPermissions(), $permType);
    }

    private function getRoleManagementPermissions(string $permType): Collection
    {
        return $this->getPermissionHelper(PermissionsTableSeeder::getRoleManagementPermissions(), $permType);
    }

    private function getMerchantManagementPermissions(string $permType): Collection
    {
        return $this->getPermissionHelper(PermissionsTableSeeder::getMerchantManagementPermissions(), $permType);
    }

    private function getInventoryManagementPermissions(string $permType): Collection
    {
        return $this->getPermissionHelper(PermissionsTableSeeder::getInventoryManagementPermissions(), $permType);
    }

    private function getOrderManagementPermissions(string $permType): Collection
    {
        return $this->getPermissionHelper(PermissionsTableSeeder::getOrderManagementPermissions(), $permType);
    }

    private function getDeliveryManagementPermissions(string $permType): Collection
    {
        return $this->getPermissionHelper(PermissionsTableSeeder::getDeliveryManagementPermissions(), $permType);
    }

    private function assert_permissions_were_retrieved(Collection $expectedPerms, Collection $actualPerms)
    {
        $expectedPerms->get('permissions')
            ->each(function(array $row) use ($actualPerms, $expectedPerms) {
                $perm = $actualPerms->get($expectedPerms['group_name'])
                    ->first(function(Permission $obj) use ($row) {
                        return $obj->name === $row['name'];
                    });

                $this->assertInstanceOf(Permission::class, $perm);
            });
    }

    public function test_can_get_grouped_permissions_for_app_owner()
    {
        $key = 'is_app_owner_permission';

        $userPerms = $this->getUserManagementPermissions($key);
        $rolePerms = $this->getRoleManagementPermissions($key);
        $merchantPerms = $this->getMerchantManagementPermissions($key);
        $inventoryPerms = $this->getInventoryManagementPermissions($key);
        $orderPerms = $this->getOrderManagementPermissions($key);
        $deliveryPerms = $this->getDeliveryManagementPermissions($key);

        $this->assertTrue($userPerms->get('permissions')->count() > 0);
        $this->assertTrue($rolePerms->get('permissions')->count() > 0);
        $this->assertTrue($merchantPerms->get('permissions')->count() > 0);
        $this->assertTrue($inventoryPerms->get('permissions')->count() > 0);
        $this->assertTrue($orderPerms->get('permissions')->count() > 0);
        $this->assertTrue($deliveryPerms->get('permissions')->count() > 0);

        $groupedPerms = Permission::getGroupedAppOwnerPermissions();

        $this->assertCount($userPerms->get('permissions')->count(), $groupedPerms->get($userPerms['group_name']));
        $this->assertCount($rolePerms->get('permissions')->count(), $groupedPerms->get($rolePerms['group_name']));
        $this->assertCount($merchantPerms->get('permissions')->count(), $groupedPerms->get($merchantPerms['group_name']));
        $this->assertCount($inventoryPerms->get('permissions')->count(), $groupedPerms->get($inventoryPerms['group_name']));
        $this->assertCount($orderPerms->get('permissions')->count(), $groupedPerms->get($orderPerms['group_name']));
        $this->assertCount($deliveryPerms->get('permissions')->count(), $groupedPerms->get($deliveryPerms['group_name']));

        // Assert that all user permissions were retrieved
        $this->assert_permissions_were_retrieved($userPerms, $groupedPerms);

        // Assert that all role permissions were retrieved
        $this->assert_permissions_were_retrieved($rolePerms, $groupedPerms);

        // Assert that all merchant permissions were retrieved
        $this->assert_permissions_were_retrieved($merchantPerms, $groupedPerms);

        // Assert that all inventory permissions were retrieved
        $this->assert_permissions_were_retrieved($inventoryPerms, $groupedPerms);

        // Assert that all orders permissions were retrieved
        $this->assert_permissions_were_retrieved($orderPerms, $groupedPerms);

        // Assert that all orders permissions were retrieved
        $this->assert_permissions_were_retrieved($deliveryPerms, $groupedPerms);
    }

    public function test_can_get_grouped_permissions_for_merchant()
    {
        $key = 'is_merchant_permission';

        $userPerms = $this->getUserManagementPermissions($key);
        $rolePerms = $this->getRoleManagementPermissions($key);
        $merchantPerms = $this->getMerchantManagementPermissions($key);
        $inventoryPerms = $this->getInventoryManagementPermissions($key);
        $orderPerms = $this->getOrderManagementPermissions($key);
        $deliveryPerms = $this->getDeliveryManagementPermissions($key);

        $this->assertTrue($userPerms->get('permissions')->count() > 0);
        $this->assertTrue($rolePerms->get('permissions')->count() > 0);
        $this->assertTrue($inventoryPerms->get('permissions')->count() > 0);
        $this->assertTrue($orderPerms->get('permissions')->count() > 0);
        $this->assertTrue($deliveryPerms->get('permissions')->count() > 0);
        $this->assertFalse($merchantPerms->get('permissions')->count() > 0);

        $groupedPerms = Permission::getGroupedMerchantPermissions();

        $this->assertCount($userPerms->get('permissions')->count(), $groupedPerms->get($userPerms['group_name']));
        $this->assertCount($rolePerms->get('permissions')->count(), $groupedPerms->get($rolePerms['group_name']));
        $this->assertCount($inventoryPerms->get('permissions')->count(), $groupedPerms->get($inventoryPerms['group_name']));
        $this->assertCount($orderPerms->get('permissions')->count(), $groupedPerms->get($orderPerms['group_name']));
        $this->assertCount($deliveryPerms->get('permissions')->count(), $groupedPerms->get($deliveryPerms['group_name']));
        $this->assertFalse($groupedPerms->has($merchantPerms['group_name']));

        // Assert that all user permissions were retrieved
        $this->assert_permissions_were_retrieved($userPerms, $groupedPerms);

        // Assert that all role permissions were retrieved
        $this->assert_permissions_were_retrieved($rolePerms, $groupedPerms);

        // Assert that all inventory permissions were retrieved
        $this->assert_permissions_were_retrieved($inventoryPerms, $groupedPerms);

        // Assert that all orders permissions were retrieved
        $this->assert_permissions_were_retrieved($orderPerms, $groupedPerms);

        // Assert that all orders permissions were retrieved
        $this->assert_permissions_were_retrieved($deliveryPerms, $groupedPerms);
    }
}
