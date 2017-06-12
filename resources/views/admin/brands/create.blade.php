@extends('layouts.master')
@section('content')
    <div class="container main-container headerOffset">
        {!! $brand->exists ? Breadcrumbs::render('edit-brand', $brand) : Breadcrumbs::render('create-brand') !!}
        @include('flash::message')
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7">
                <h1 class="section-title-inner"> {{ $brand->exists ? 'Edit Brand':'Add New Brand' }}</h1>
                <div class="row userInfo">
                    <div class="col-lg-12">
                        <p class="required"><sup>*</sup> Required field</p>
                    </div>
                    @include('admin.brands.includes._create')
                    @include('admin.includes._nav_buttons')
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-5"></div>
        </div>

        <div style="clear:both"></div>
    </div>
@endsection