@extends('layouts.app')

@section('content')
<div class="form-wrapper container-fluid">
    <div class="row-fluid split-container">
        <div class="col-sm-12 col-md-6 col-lg-6 split-right-form">
          <div class="panel panel-default">
              <div class="panel-heading">
                <h1>User Registration</h1>
              </div>

              <div class="panel-body">
                  <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-sm-12 col-md-6 col-lg-6">
                          <label for="name" class="control-label h4">Full Name</label>

                          <div class="">
                              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                              @if ($errors->has('name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-sm-12 col-md-6 col-lg-6">
                          <label for="email" class="control-label h4">E-Mail Address</label>

                          <div class="">
                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-sm-12 col-md-6 col-lg-6">
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

                      <div class="form-group col-sm-12 col-md-6 col-lg-6">
                          <label for="password-confirm" class="control-label h4">Confirm Password</label>

                          <div class="">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-sm-12 col-md-6 submit-button">
                              <button type="submit" class="btn btn-primary h4">
                                  Register
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection
