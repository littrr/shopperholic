@extends('layouts.master')
@section('content')
    <div class="container main-container headerOffset">
        {!! $role->exists ? Breadcrumbs::render('edit-role', $role) : Breadcrumbs::render('create-role') !!}
        @include('flash::message')
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7">
                <h1 class="section-title-inner"> {{ $role->exists ? 'Edit Role':'Add New Role' }}</h1>
                <div class="row userInfo">
                    <div class="col-lg-12">
                        <p class="required"><sup>*</sup> Required field</p>
                    </div>
                    @include('admin.roles.includes._create')
                    @include('admin.includes._nav_buttons')
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-5"></div>
        </div>

        <div style="clear:both"></div>
    </div>
@endsection