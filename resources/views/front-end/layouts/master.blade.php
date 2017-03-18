<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>App Name - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('bh279_front-end/css/materialize.min.css') }}"  media="screen,projection"/>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="{{ URL::asset('bh279_front-end/css/normalize.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('bh279_front-end/css/swiper.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('bh279_front-end/css/style.css') }}">

    <script src="{{ URL::asset('bh279_front-end/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bh279_front-end/js/materialize.min.js') }}"></script>
    <script src="{{ URL::asset('bh279_front-end/js/swiper.jquery.min.js') }}"></script>
    <script src="{{ URL::asset('bh279_front-end/js/myscript.js') }}"></script>
</head>
<body >
    @section('header')
    <header id="header" >
        <div class="header-form-container navbar-fixed">
            <nav class="nav-extended">
                <div class="nav-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col l2">
                              <a href="{{ route('homepage') }}" class="brand-logo">Logo</a>
                              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                            </div>
                            <div class="col l1">
                              <a href="" class="show-menu"><i class="material-icons">menu</i></a>
                              </div>
                            <form class="col l5" style="">
                                <div class="search-wrapper card">
                                    <input id="search"><i class="material-icons">search</i>
                                    <div class="search-results"></div>
                                </div>
                            </form>
                            <div class="col l4">
                                <ul class="right hide-on-med-and-down">
                                    @if (Auth::guest())
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    @else
                                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                                    <!-- Dropdown Structure -->
                                    <ul id="dropdown1" class="dropdown-content">
                                         @if (Auth::user()->level==1||Auth::user()->level==2)
                                            <li><a href="{{ route('dashboard') }}">Vào trang quản trị</a></li>
                                        @endif
                                        <li><a href="{{ route('changePassword') }}">Đổi mật khẩu</a></li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                    @endif
                                </ul>
                            </div>
                        </div>
                      <ul class="side-nav" id="mobile-demo">
                        <li><a href="sass.html">Sass</a></li>
                        <li><a href="badges.html">Components</a></li>
                      </ul>

                    </div> <!--end container-->
                </div>
                <a class="btn-floating btn-large halfway-fab waves-effect waves-light teal">
                    <i class="material-icons">shopping_basket</i>
                </a>
            </nav> <!-- end .nav-extand -->
        </div>
        <div class="container">
            <div class="row" style="margin-bottom: 0">
                <div class=" main-nav-wrap col l3 " id="fixed-menu" style="display: none;position: fixed;z-index: 99999999">
                    @include('front-end.layouts.menu')
                </div>
                </div>
            </div>
        </div>
        <!-- /container -->
    </header><!-- /header -->
    @show
    <main class="wrap">
        <div class="container">
                @yield('content')
        </div>
    </main>
    @section('footer')
        @include('front-end.layouts.footer')
    @show
    <div id="overlay-body" style="display: none;"></div>
</body>
</html>