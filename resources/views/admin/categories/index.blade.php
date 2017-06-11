@extends('layouts.master')
@section('content')
    <div class="container main-container headerOffset">
        {!! Breadcrumbs::render('categories') !!}
        @include('flash::message')
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="section-title-inner">List of Categories</h1>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary pull-right">Add Category</a>
                        </div>
                    </div>
                </div>
                @if($categories->count())
                    <div class="col-lg-12 col-md-12 col-sm 12">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Parent</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->parentCategory->name ?? '_'}}</td>
                                        <td>
                                            <a href="{{route('admin.categories.edit', ['category' => $category])}}" class="btn btn-inline btn-success btn-sm">
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
                                        No Category added
                                    </h3>
                                    <p class="text-center">
                                        <a class="btn btn-primary" type="button" href="{{ route('admin.categories.create') }}">Add New Category</a>
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