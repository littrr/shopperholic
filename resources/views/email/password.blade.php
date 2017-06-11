@extends('email.new_account_layout')
@section('page-content')
    You have requested to change your account password used to access
    @if ($user->userable)
        {{ $user->userable->name }} on {{config('app.name')}}<br/> }}
    @else
    {{config('app.name')}}<br/>
    @endif
    Click the button below and from the page you are redirected to, set a new account password.<br/>
@endsection