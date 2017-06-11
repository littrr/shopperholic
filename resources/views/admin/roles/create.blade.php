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
                    <div class="col-lg-12 clearfix">
                        <ul class="pager">
                            <li class="previous pull-right"><a href="index.html"> <i class="fa fa-home"></i> Go to Shop </a>
                            </li>
                            <li class="next pull-left"><a href="account.html"> ← Back to My Account</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-5"></div>
        </div>

        <div style="clear:both"></div>
    </div>
@endsection