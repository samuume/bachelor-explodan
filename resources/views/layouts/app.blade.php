<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>explodan</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                       <i class="fa fa-paper-plane" aria-hidden="true"></i>
                       Explodan
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">

                        <!-- Authentication Links -->
                        @guest
                            <li class="menu-links animated mobile-show fadeInLeft">
                                {!! menu('guest', 'bootstrap'); !!}
                            </li>

                            <li class="dropdown mobile-hide">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">

                                    <i class="fa fa-align-right" aria-hidden="true"></i>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <div class="dropdown-menu-content">
                                        <li class="menu-links animated fadeIn">
                                            {!! menu('guest', 'bootstrap'); !!}
                                        </li>
                                    </div>
                                </ul>
                            </li>
                            <ul class="nav navbar-nav">
                                &nbsp;
                            </ul>
                        @else
                          <div class="mobile-menu-auth-container">
                            <li class="menu-links animated mobile-show fadeInLeft">
                                {!! menu('main', 'bootstrap'); !!}
                                <a style="padding: 10px 15px;" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                <ul class="nav navbar-nav">
                                    &nbsp;
                                </ul>
                            </li>
                            <div class="profile-preview mobile-show">
                                <?php
                                  $url = Auth::user()->avatar;
                                  if (strpos($url, 'facebook')) {
                                    echo '<img class="profile_user_avatar animated fadeInRight" src="'.$url.'" style="width: 60% !important;">';
                                  } else {
                                    echo '<img class="profile_user_avatar animated fadeInRight" src="/uploads/avatars/'.$url.'" style="width: 60% !important;">';
                                  }
                                ?>
                                <p class="animated fadeInRight">{{ Auth::user()->name }}</p>
                            </div>
                          </div>

                            <li class="dropdown mobile-hide">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">

                                    <i class="fa fa-align-right" aria-hidden="true"></i>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <div class="dropdown-menu-content">
                                        <li class="menu-links animated fadeIn">

                                            {!! menu('main', 'bootstrap'); !!}
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                        <div class="profile-preview">
                                            <?php
                                              $url = Auth::user()->avatar;
                                              if (strpos($url, 'facebook')) {
                                                echo '<img class="profile_user_avatar animated fadeIn" src="'.$url.'" style="width: 40% !important;">';
                                              } else {
                                                echo '<img class="profile_user_avatar animated fadeIn" src="/uploads/avatars/'.$url.'" style="width: 40% !important;">';
                                              }
                                            ?>
                                            <p class="animated fadeInRight">{{ Auth::user()->name }}</p>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        <!-- Footer -->
        @include('subviews.footer')
    </div>

    <!-- Scripts -->
    <script>
      window.algolia = {
            app_id: "{{ config('scout.algolia.id') }}",
            search_key: "{{ config('scout.algolia.secret') }}"
        }
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
      // Profile Page File Upload Style
      $('.info-content').on('change', '#file-upload', function() {
        var filepath = this.value;
        var m = filepath.match(/([^\/\\]+)$/);
        var filename = m[1];
        $('#filename').html(filename);
      });
      $('.share-info-form').on('change', '#img1-upload', function() {
        var filepath = this.value;
        var m = filepath.match(/([^\/\\]+)$/);
        var filename = m[1];
        $('#img1-filename').html(filename);
      });
      $('.share-info-form').on('change', '#img2-upload', function() {
        var filepath = this.value;
        var m = filepath.match(/([^\/\\]+)$/);
        var filename = m[1];
        $('#img2-filename').html(filename);
      });
      $('.share-info-form').on('change', '#img3-upload', function() {
        var filepath = this.value;
        var m = filepath.match(/([^\/\\]+)$/);
        var filename = m[1];
        $('#img3-filename').html(filename);
      });
    </script>
</body>
</html>
