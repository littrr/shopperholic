@extends('emails.new_account_layout')
@section('page-content')
    The account administrator of {{$admin->userable ? $admin->userable->name : config('app.name')}} has requested that you change your account password<br/>
    Click the button below and from the page you are redirected to, set a new account password.<br/>
    <strong>Note:</strong>&nbsp;Contact the administrator if you have any questions or concerns.
@endsection