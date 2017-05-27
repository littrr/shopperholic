{{--Sign in modal--}}
<div class="modal signUpContent fade" id="ModalLogin" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center"> Sign in to {{ config('app.name') }} </h3>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group login-username">
                        <div>
                            <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                 <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group login-password">
                        <div>
                            <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>
                        </div>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div>
                            <div class="checkbox login-remember">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <button type="submit" class="btn btn-block btn-lg btn-primary">
                                Login
                            </button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <p class="text-center"> Not here before? <a data-toggle="modal" data-dismiss="modal" href="master.blade.php#ModalSignup"> Sign Up. </a> <br>
                    <a href="{{ route('password.request') }}">
                        Lost your password?
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

{{--Sign up modal--}}
<div class="modal signUpContent fade" id="ModalSignup" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center"> SIGNUP </h3>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="form-group reg-username">
                        <input id="name" type="text" placeholder="Full Name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                 <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group reg-email">
                        <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group reg-password">
                        <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                 <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div>
                            <input id="password-confirm" type="password" placeholder="Retype Password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-block btn-lg btn-primary">Register</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p class="text-center">
                    Already member?
                    <a data-toggle="modal" data-dismiss="modal" href="master.blade.php#ModalLogin">
                        Sign in
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>