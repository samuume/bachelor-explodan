@extends('layouts.app')

@section('content')
<div class="container full-height">
    <div class="row profile-info">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 profile-share-form">
          <div class="panel">
            <div class="panel-body">
              @if(Session::has('message'))
                <div class="message-alert">
                  <h4>{{Session::get('message')}}</h4>
                </div>
              @endif
              <h3>Share your travel experience with us!</h3>
              <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
              </ul>
              {!! Form::open(array('route' => 'tell_store', 'class' => 'share-info-form')) !!}
                {!! Form::token() !!}
                <div class="form-group">
                  <label for="name" class="h4 control-label">Full name</label>
                  <input type="text" name="name" placeholder="Your name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email" class="h4 control-label">E-mail</label>
                  <input type="text" name="email_address" placeholder="Your e-mail" class="form-control">
                </div>
                <div class="form-group">
                  <label for="categories" class="h4 control-label">Activity Type</label>
                  <input type="text" name="categories" placeholder="Define the activity type or the trip" class="form-control">
                </div>
                <div class="form-group location-dropdown">
                  <div class="dropdown-content">
                    <label for="city" class="h4 control-label">City</label>
                    <input type="text" name="city" placeholder="Destination city" class="form-control">
                  </div>
                  <div class="dropdown-content">
                    <label for="country" class="h4 control-label">Country</label>
                    <input type="text" name="country" placeholder="Destination country" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label for="travel_session" class="h4 control-label">Recommended Travel Session of Year</label>
                  <input type="text" name="travel_session" placeholder="Fx. Spring, Summer, Autumn or Winter" class="form-control">
                </div>
                <div class="form-group">
                  <label for="est_time" class="h4 control-label">Time Spend</label>
                  <input type="text" name="est_time" placeholder="Estimated Time, fx. 3 weeks" class="form-control">
                </div>
                <div class="form-group">
                  <label for="title" class="h4 control-label">Title</label>
                  <input type="text" name="title" placeholder="A title for your story, fx. Climbing in Great Canyon" class="form-control">
                </div>
                <div class="form-group">
                  <label class="h4 control-label">Banner Image</label>
                  <p class="gray-text">Banner image for your history, prefer resolution 4000 in width minimum.</p>
                  <div class="profile-avatar-upload">
                    <span id="img1-filename">Select your image</span>
                    <label for="img1-upload">Browse
                      <input type="file" name="img1" id="img1-upload">
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="excerpt" class="h4 control-label">Description</label>
                  <input type="text" name="excerpt" placeholder="Write short teaser for your story here" class="form-control">
                </div>
                <div class="form-group">
                  <label class="h4 control-label">Extra Image</label>
                  <p class="gray-text">An extra image to spice your history up</p>
                  <div class="profile-avatar-upload">
                    <span id="img2-filename">Select your image</span>
                    <label for="img2-upload">Browse
                      <input type="file" name="img2" id="img2-upload">
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="msg" class="h4 control-label">Trip Content</label>
                  <textarea name="msg" rows="8" cols="80" placeholder="Write your trip Content" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label class="h4 control-label">Extra Image</label>
                  <p class="gray-text">An extra image to spice your history up</p>
                  <div class="profile-avatar-upload">
                    <span id="img3-filename">Select your image</span>
                    <label for="img3-upload">Browse
                      <input type="file" name="img3" id="img3-upload">
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="submit-button">
                    <input type="submit" class="btn btn-primary" value="Send">
                  </div>
                </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
