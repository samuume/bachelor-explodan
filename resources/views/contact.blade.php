@extends('layouts.app')

@section('content')
<div class="form-wrapper container-fluid">
    <div class="row-fluid split-container">
        <!--<div class="col-md-6 col-lg-6 split-left-image"></div>-->
        <div class="col-sm-12 col-md-6 col-lg-6 split-right-form">
          <div class="panel panel-default">
              <div class="panel-heading">
                <h1>Contact us</h1>
                <div class="contact-info">
                  <p>
                    <span>Rejsegade 1, Odense Denmark</span>
                    <span>+ 45 22 33 44 55</span>
                    <span>info@exploran.com</span>
                  </p>
                  @if(Session::has('message'))
                    <div class="message-alert">
                      <h4>{{Session::get('message')}}</h4>
                    </div>
                  @endif
                </div>
              </div>
              <div class="panel-body">
                  <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                  {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}
                  {!! Form::token() !!}
                  <div class="form-group">
                      {!! Form::label('Full Name', null, array('class' => 'control-label h4')) !!}
                      {!! Form::text('name', null,
                          array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Your name')) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('E-mail Address', null, array('class' => 'control-label h4')) !!}
                      {!! Form::text('email_address', null,
                          array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Your e-mail address')) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('Message', null, array('class' => 'control-label h4')) !!}
                      {!! Form::textarea('msg', null,
                          array('required',
                                'class'=>'form-control',
                                'size' => '50x2',
                                'placeholder'=>'Your message')) !!}
                  </div>

                  <div class="form-group">
                    <div class="submit-button">
                      {!! Form::submit('Contact Us!',
                        array('class'=>'btn btn-primary h4')) !!}
                    </div>
                  </div>
                  {!! Form::close() !!}
              </div>
              <div class="col-sm-12 col-md-12 col-lg-12 contact-extra-info">
                <p>Contact us here to get help with a travel expert, the support team will be in touch within 24 hours.
  If it is about an adventure trip experience you want to share with us, please log in.</p>
              </div>
              <div class="contact-register-btn-group col-sm-12 col-md-12 col-lg-12">
                <a href="login" class="h4 login-btn">Login</a>
                <span>Don’t have an account? Register <a href="register" class="register-btn">here</a></span>
              </div>
          </div>
        </div>
    </div>

</div>
@endsection
