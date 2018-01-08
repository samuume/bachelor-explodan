@extends('layouts.app')

@section('content')
<section class="post-wrapper container">
  <div class="banner-img" style="background-image: url({{ Voyager::image( $post->image ) }});" alt="Post Banner"></div>
  <div class="row post-content">
    <div class="col-md-12 col-lg-12">
      <h1>{{ $post->title }}</h1>
      <p class="gray-text">{{ $post->created_at }}</p>
      <p class="gray-text">{{ $post->user->name }}</p>
      <p class="post-user-rating">
        <?php
          $url = $post->user->avatar;
          if (strpos($url, 'facebook')) {
            echo '<img class="user-protrait animated fadeIn" src="'.$url.'">';
          } else {
            echo '<img class="user-protrait profile_user_avatar animated fadeIn" src="/uploads/avatars/'.$url.'">';
          }
        ?>        <!-- Count Stars and convert them into stars -->
        @php
          $starNum = $post->stars;
          if ($starNum <= 5) {
            for ($i=0; $i < $starNum; $i++) {
              echo '<i class="fa fa-star" aria-hidden="true"></i>';
            }
          }
        @endphp
      </p>
      <p class="intro-text">{{ $post->excerpt }}</p>
      <div class="row post-custom-fields">
        <div class="col-sm-12 col-md-4 col-lg-4 fact-box">
          <ul>
            <li class="p">Location: {{ $post->location->city }}, {{ $post->location->country }}</li>
            <li class="p">Type: {{ $post->categories->name }}</li>
            <li class="p">Best Travel Session: {{ $post->travel_session }}</li>
            <li class="p">Estimated Time: {{ $post->est_time }}</li>
          </ul>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8 extra-img-one">
          <div class="gray-bg"></div>
          <img src="{{ Voyager::image( $post->extra_image_one ) }}" alt="Post Related Image">
        </div>
      </div>
      <p class="post-body">{{ strip_tags($post->body) }}</p>
      <div class="col-md-12 extra-img-two" style="background-image: url({{ Voyager::image( $post->extra_image_two ) }});"></div>
      @include('subviews.sharebtns',['url' => Request::url()])
    </div>
  </div>
</section>
@if ($post->categories_id)
  @include ('subviews.relatedPosts')
@endif
@endsection
