<?php

namespace App\Http\Controllers;

use App\Jobs\AddRoleJob;
use App\Jobs\GetPermissionsJob;
use Illuminate\Http\Request;
use Shopperholic\Entities\Role;
use Shopperholic\Exceptions\ConflictWithExistingRecord;
use Shopperholic\Entities\Permission;

class RolesController extends Controller
{
    /**
     * display a listing of the roles.
     *
     * @return \illuminate\http\response
     */
    public function index()
    {
        $roles = Role::with(['permissions'])->paginate(30);

        return view('admin.roles.index', compact('roles'));
    }

    /**
     * show the form for creating a new role.
     *
     * @param request $request
     * @return \illuminate\http\response
     */
    public function create(Request $request)
    {
        $role = new Role();
        $permissions = dispatch(new GetPermissionsJob($request));

        return view('admin.roles.create', compact('role', 'permissions'));
    }

    /**
     * store a newly created role in storage.
     *
     * @param  \illuminate\http\request  $request
     * @return \illuminate\http\response
     */
    public function store(Request $request)
    {
        try {
            dispatch(new AddRoleJob($request));
        } catch (\Exception $e) {
            if ($e instanceof ConflictWithExistingRecord) {
                logger('User tried to add a role that already exists', [
                    'user' => $request->user()
                ]);

                flash()->error('Role already exists');

                return back()->withInput();
            }

            logger('An error occurred whiles adding a role', [
                'message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()
            ]);

            flash()->error('An error occurred whiles adding a role');

            return back()->withInput();
        }

        flash()->success('Role successfully added');

        return redirect()->route('admin.roles.index');
    }

    /**
     * show the form for editing the specified role.
     *
     * @param Role $role
     * @return \illuminate\http\response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::getGroupedPermissions();
        $addedPermissions = $role->permissions()->pluck('name')->all();

        return view('admin.roles.create', compact('role', 'permissions', 'addedPermissions'));
    }

    /**
     * update the specified role in storage.
     *
     * @param  \illuminate\http\request $request
     * @param Role $role
     * @return \illuminate\http\response
     */
    public function update(Request $request, Role $role)
    {
        try {
            dispatch(new AddRoleJob($request, $role));
        } catch (\Exception $e) {
            logger('An error occurred whiles updating a role', [
                'message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()
            ]);

            flash()->error('An error occurred whiles updating a role');

            return back()->withInput();
        }

        flash()->success('Role successfully updated');

        return redirect()->route('admin.roles.index');
    }
}
