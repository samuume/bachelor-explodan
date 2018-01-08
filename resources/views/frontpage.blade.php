@extends('layouts.app')

@section('content')
<div class="container">
    <section class="frontpageSearch row">
        <searchfrontpage></searchfrontpage>
    </section>

    <!-- Featured -->
    <section class="row featured-posts animated fadeIn">
      <div class="row-fluid">
        @foreach($posts as $post)
          @if($post->featured == 1)
          <a class="col-xs-12 col-sm-12 col-md-3 col-lg-3 featured-item-box"
          style="background-image: url({{ Voyager::image( $post->image ) }})"
          href="{{ $post->slug }}">
            <div class="overlay">
              <div class="align-box">
                <h4>{{ $post->title }}</h4>
                <p>{{ $post->location->city }}, {{ $post->location->country }}</p>
                <p class="hover-text">{{ str_limit($post->excerpt, 150) }}<span>Read more</span></p>
              </div>
            </div>
          </a>
          @endif
        @endforeach
      </div>
    </section>
    <!-- About -->
    <section>
      <aboutfrontpage></aboutfrontpage>
    </section>

    <!-- Instagram Feeds -->
    <section>
      <h2 class="h1 text-center">Instagram Feeds</h2>
      <div class="row instagram-row">
        @include('/subviews/instagram')
      </div>
    </section>
</div>
<!-- Co-create -->
<cocreatecontact></cocreatecontact>
@endsection
