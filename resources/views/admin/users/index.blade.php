@extends('layouts.master')
@section('content')
    <div class="container main-container headerOffset">
        {!! Breadcrumbs::render('users') !!}
        @include('flash::message')
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="section-title-inner">List of Users</h1>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.users.create') }}" class="btn btn-primary pull-right">Add User</a>
                        </div>
                    </div>
                </div>
                @if($users->count())
                    <div class="col-lg-12 col-md-12 col-sm 12">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Roles</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->contact_number }}</td>
                                        <td>
                                            @foreach($user->roles as $role)
                                                {{ $role->display_name }}
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{route('admin.users.edit', ['user' => $user])}}" class="btn btn-inline btn-success btn-sm">
                                                <i class="fa fa-pencil"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 class="text-center">
                                        No User added
                                    </h3>
                                    <p class="text-center">
                                        <a class="btn btn-primary" type="button" href="{{ route('admin.users.create') }}">Add New User</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5"></div>
        </div>

        <div style="clear:both"></div>
    </div>
@endsection