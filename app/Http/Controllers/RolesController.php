<?php

namespace App\Http\Controllers;

use App\Jobs\AddRoleJob;
use App\Jobs\GetPermissionsJob;
use Illuminate\Http\Request;
use Shopperholic\Entities\Role;
use Shopperholic\Exceptions\ConflictWithExistingRecord;

class RolesController extends Controller
{
    /**
     * display a listing of the roles.
     *
     * @return \illuminate\http\response
     */
    public function index()
    {

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
     * display the specified role.
     *
     * @param  int  $id
     * @return \illuminate\http\response
     */
    public function show($id)
    {
        //
    }

    /**
     * show the form for editing the specified role.
     *
     * @param  int  $id
     * @return \illuminate\http\response
     */
    public function edit($id)
    {
        //
    }

    /**
     * update the specified role in storage.
     *
     * @param  \illuminate\http\request  $request
     * @param  int  $id
     * @return \illuminate\http\response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * remove the specified role from storage.
     *
     * @param  int  $id
     * @return \illuminate\http\response
     */
    public function destroy($id)
    {
        //
    }
}
