@extends('email.new_account_layout')
@section('page-content')
{{$admin->name}} has invited you to join
@if ($admin->userable)
    <strong>{{$admin->userable->name}}</strong> on
@endif
<strong>{{config('app.name')}}</strong><br/>
To complete your account setup, click the button below and from the page you are redirected to, set a new account password.
@endsection