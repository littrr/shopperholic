@extends('layouts.master')
@section('content')
    <div class="container main-container headerOffset">
        {!! Breadcrumbs::render('brands') !!}
        @include('flash::message')
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="section-title-inner">List of Brands</h1>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.brands.create') }}" class="btn btn-primary pull-right">Add Brand</a>
                        </div>
                    </div>
                </div>

                @if($brands->count())
                <div class="col-lg-12 col-md-12 col-sm 12">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($brands as $brand)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $brand->name }}</td>
                                    <td>
                                        <a href="{{route('admin.brands.edit', ['brand' => $brand])}}" class="btn btn-inline btn-success btn-sm">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="pull-right">
                        {{ $brands->links() }}
                    </div>
                </div>
                @else
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 class="text-center">
                                        No Brand added
                                    </h3>
                                    <p class="text-center">
                                        <a class="btn btn-primary" type="button" href="{{ route('admin.brands.create') }}">Add New Brand</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @include('admin.includes._nav_buttons')
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5"></div>
        </div>

        <div style="clear:both"></div>
    </div>
@endsection