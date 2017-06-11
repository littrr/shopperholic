<?php

namespace App\Http\Controllers;

use App\Jobs\AddUserJob;
use Illuminate\Http\Request;
use Shopperholic\Entities\User;
use Shopperholic\Entities\Role;
use Shopperholic\Exceptions\ConflictWithExistingRecord;

class UsersController extends Controller
{
    /**
     * Display a listing of the users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with(['roles'])->paginate(30);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        $roles = Role::whereUserableId(null)->get();

        return view('admin.users.create', compact('user', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'roles' => 'required'
        ]);

        try {
            dispatch(new AddUserJob($request));
        } catch (\Exception $e) {
            if ($e instanceof ConflictWithExistingRecord) {
                logger('User tried to add a user who already exists', ['user' => $request->user()]);

                flash('User already exists');

                return back()->withInput();
            }

            logger('An error occurred whiles trying to add a user', [
                'message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()
            ]);

            return back()->withInput();
        }

        flash()->success('User successfully added');

        return redirect()->route('admin.users.index');
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::whereUserableId(null)->get();

        return view('admin.users.create', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        try {
            dispatch(new AddUserJob($request, $user));
        } catch (\Exception $e) {
            logger('An error occurred whiles updating user', [
                'message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()]);

            flash()->error('An error occurred whiles updating user, please try again.');

            return back()->withInput();
        }

        flash()->success('User successfully updated');

        return redirect()->route('admin.users.index');
    }
}
