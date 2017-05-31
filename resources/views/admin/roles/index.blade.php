@extends('layouts.master')
@section('content')
    <div class="container main-container headerOffset">
        {!! Breadcrumbs::render('roles') !!}
        @include('flash::message')
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7">
                <h1 class="section-title-inner">List of Roles</h1>
                @if($roles->count())
                    <div class="col-lg-12 col-md-12 col-sm 12">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Permissions</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{ $role->display_name }}</td>
                                        <td>{{ $role->description }}</td>
                                        <td>
                                            {{-- Display up to 3 permissions for the role --}}
                                            @foreach ($role->permissions->take(3) as $permission)
                                                {{$permission->display_name}}{{!$loop->last ? ', ' : ''}}
                                                @if ($loop->last && $role->permissions->count() > 3)
                                                    &nbsp;etc
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{route('admin.roles.edit', ['role' => $role])}}" class="btn btn-inline btn-success btn-sm">
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
                                        No Role added
                                    </h3>
                                    <p class="text-center">
                                        <a class="btn btn-primary" type="button" href="{{ route('admin.roles.create') }}">Add New Role</a>
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