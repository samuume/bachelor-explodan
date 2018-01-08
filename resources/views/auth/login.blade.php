@extends('layouts.app')

@section('content')
<div class="form-wrapper container-fluid">
  <div class="row-fluid split-container">
    <div class="col-xs-12 col-md-6 col-lg-6 split-right-form">
        <div class="panel panel-default">
            <div class="panel-heading"><h1>Login</h1></div>

            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}" class="login-form">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-sm-12 col-md-12 col-lg-12">
                        <label for="email" class="control-label h4">E-Mail Address</label>

                        <div class="">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-sm-12 col-md-12 col-lg-12">
                        <label for="password" class="control-label h4">Password</label>

                        <div class="">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12 col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} checked>
                                    <span>Remember Me</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class=" col-sm-12 col-md-8 align-box submit-button">
                            <button type="submit" class="btn btn-primary h4">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                    <div class="signin-providers">
                        <h4>OR</h4>
                        <a class="fb-login" href="{{ url('/login/facebook') }}">Login with Facebook</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
