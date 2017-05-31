<?php

use Illuminate\Database\Seeder;
use Shopperholic\Entities\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data[] = self::getRoleManagementPermissions();
        $data[] = self::getUserManagementPermissions();
        $data[] = self::getInventoryManagementPermissions();
        $data[] = self::getMerchantManagementPermissions();
        $data[] = self::getOrderManagementPermissions();
        $data[] = self::getDeliveryManagementPermissions();

        $permissions = collect($data)
            ->filter(function (array $row) {
                return array_key_exists('permissions', $row);
            })
            ->map(function (array $row) {
                // Iterate the permissions and add them
                // And set the group_name field
                return collect($row['permissions'])
                    ->map(function (array $permRow) use ($row) {
                        $permRow['group_name'] = array_key_exists('group_name', $row) ?
                            $row['group_name'] : null;
                        return $this->addPermission($permRow);
                    });
            })
            // The previous step returns a multidimensional collection
            ->flatten();

        Permission::whereNotIn('id', $permissions->pluck('id')->all())->delete();
    }

    /**
     * @param $row
     * @return Permission
     */
    private function addPermission($row): Permission
    {
        $perm = Permission::firstOrNew(['name' => $row['name']]);

        foreach ($perm->getFillable() as $fillable) {
            if (array_key_exists($fillable, $row)) {
                $perm[$fillable] = $row[$fillable];
            }
        }

        $perm->save();

        return $perm;
    }

    /**
     * User management permissions
     *
     * @return array
     */
    public static function getUserManagementPermissions(): array
    {
        return [
            'group_name' => 'User Management',
            'permissions' => [
                [
                    'name' => 'add-user',
                    'display_name' => 'Add User',
                    'description' => 'User can add/create users',
                    'is_app_owner_permission' => true,
                    'is_merchant_permission' => true
                ],
                [
                    'name' => 'edit-user',
                    'display_name' => 'Edit User',
                    'description' => 'User can edit users',
                    'is_app_owner_permission' => true,
                    'is_merchant_permission' => true
                ],
                [
                    'name' => 'delete-user',
                    'display_name' => 'Delete User',
                    'description' => 'User can remove users',
                    'is_app_owner_permission' => true,
                    'is_merchant_permission' => true
                ]
            ]
        ];
    }

    /**
     * Role management permissions
     *
     * @return array
     */
    public static function getRoleManagementPermissions(): array
    {
        return [
            'group_name' => 'Role Management',
            'permissions' => [
                [
                    'name' => 'add-role',
                    'display_name' => 'Add Role',
                    'description' => 'User can add/create roles',
                    'is_app_owner_permission' => true,
                    'is_merchant_permission' => true
                ],
                [
                    'name' => 'edit-role',
                    'display_name' => 'Edit Role',
                    'description' => 'User can edit roles',
                    'is_app_owner_permission' => true,
                    'is_merchant_permission' => true
                ],
                [
                    'name' => 'delete-role',
                    'display_name' => 'Delete Role',
                    'description' => 'User can remove role',
                    'is_app_owner_permission' => true,
                    'is_merchant_permission' => true
                ]
            ]
        ];
    }

    /**
     * Merchant management permissions
     *
     * @return array
     */
    public static function getMerchantManagementPermissions(): array
    {
        return [
            'group_name' => 'Merchant Management',
            'permissions' => [
                [
                    'name' => 'add-merchant',
                    'display_name' => 'Add Merchant',
                    'description' => 'User can add/create merchants',
                    'is_app_owner_permission' => true,
                    'is_merchant_permission' => false
                ],
                [
                    'name' => 'edit-merchant',
                    'display_name' => 'Edit Merchant',
                    'description' => 'User can edit merchants',
                    'is_app_owner_permission' => true,
                    'is_merchant_permission' => false
                ],
                [
                    'name' => 'delete-merchant',
                    'display_name' => 'Delete Merchant',
                    'description' => 'User can delete merchants',
                    'is_app_owner_permission' => true,
                    'is_merchant_permission' => false
                ]
            ]
        ];
    }

    /**
     * Inventory management permissions
     *
     * @return array
     */
    public static function getInventoryManagementPermissions(): array
    {
        return [
            'group_name' => 'Inventory Management',
            'permissions' => [
                [
                    'name' => 'add-product',
                    'display_name' => 'Add Product',
                    'description' => 'User can add products',
                    'is_app_owner_permission' => true,
                    'is_merchant_permission' => true
                ],
                [
                    'name' => 'edit-product',
                    'display_name' => 'Edit Product',
                    'description' => 'User can edit products',
                    'is_app_owner_permission' => true,
                    'is_merchant_permission' => true
                ],
                [
                    'name' => 'delete-product',
                    'display_name' => 'Delete Product',
                    'description' => 'User can delete products',
                    'is_app_owner_permission' => true,
                    'is_merchant_permission' => true
                ]
            ]
        ];
    }

    /**
     * Order management permissions
     *
     * @return array
     */
    public static function getOrderManagementPermissions(): array
    {
        return [
            'group_name' => 'Order Management',
            'permissions' => [
                [
                    'name' => 'view-orders',
                    'display_name' => 'View orders',
                    'description' => 'User can view the list of orders',
                    'is_app_owner_permission' => true,
                    'is_merchant_permission' => true
                ],
                [
                    'name' => 'update-order-status',
                    'display_name' => 'Update order status',
                    'description' => 'User can update the status',
                    'is_app_owner_permission' => true,
                    'is_merchant_permission' => true
                ],
                [
                    'name' => 'delete-order',
                    'display_name' => 'Delete Order',
                    'description' => 'User can delete an order',
                    'is_app_owner_permission' => true,
                    'is_merchant_permission' => true
                ]
            ]
        ];
    }

    /**
     * Delivery management permissions
     *
     * @return array
     */
    public static function getDeliveryManagementPermissions(): array
    {
        return [
            'group_name' => 'Delivery Management',
            'permissions' => [
                [
                    'name' => 'deliver-orders',
                    'display_name' => 'Deliver Orders',
                    'description' => 'User can deliver order',
                    'is_app_owner_permission' => true,
                    'is_merchant_permission' => true
                ]
            ]
        ];
    }
}
