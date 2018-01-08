@extends('layouts.app')

@section('content')
<div class="container full-height">
    <div class="row profile-info">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <h3>{{ $user->name }}'s Profile</h3>
          <?php
            $url = $user->avatar;
            if (strpos($url, 'facebook')) {
              echo '<img class="profile_user_avatar" src="'.$url.'" style="width: auto; height: 150px; border-radius: 150;">';
            } else {
              echo '<img class="profile_user_avatar" src="/uploads/avatars/'.$url.'" style="width: auto; height: 150px; border-radius: 150;">';
            }
          ?>
          <p>Email: <span>{{ Auth::user()->email }}</span></p>

          <form action="/profile" method="POST" enctype="multipart/form-data" class="info-content">
            <div class="profile-avatar-upload">
              <span id="filename">Select your image</span>
              <label for="file-upload">Browse
                <input type="file" name="avatar" id="file-upload">
              </label>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-info h4 sendbtn" value="Confirm change">
          </form>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6 share-info-content">
          <h3>Share your travel experience with us!</h3>
          <p>You can send the amazing travel story of yours to us, as soon as the story has been verified by the administration of Explodan, your story will be posted on this website.</p>
          <p>The knowledge of yours will help many other travelers around the world, Start contribute today!</p>
          <div class="share-btn-wrapper">
            <a href="/tell" class="share-btn">Share</a>
          </div>
        </div>
    </div>
</div>
@endsection
