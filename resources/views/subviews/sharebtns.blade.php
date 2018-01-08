<div class="fb-share-button"
      data-href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}"
      data-layout="button" data-size="small" data-mobile-iframe="true">
      <a class="fb-xfbml-parse-ignore"
         target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}">
         <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
         <span>Share</span></a></div>
@section('javascript')
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/da_DK/sdk.js#xfbml=1&version=v2.11&appId=1317082208374655';
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
@stop
