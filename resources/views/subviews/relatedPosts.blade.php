
<section class="container related-posts">
    @foreach ($posts as $post)
      <a class="col-sm-6 col-md-3 col-lg-3 featured-item-box"
      style="background-image: url({{ Voyager::image( $post->image ) }})"
      href="post/{{ $post->slug }}">
        <div class="overlay">
          <div class="align-box">
            <h4>{{ $post->title }}</h4>
            <p>{{ $post->location->city }}, {{ $post->location->country }}</p>
            <p class="hover-text">{{ str_limit($post->excerpt, 150) }}<span>Read more</span></p>
          </div>
        </div>
      </a>
    @endforeach
</section>
