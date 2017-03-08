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
<style>
</style>
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
                              <a href="#!" class="brand-logo">Logo</a>
                              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                            </div>
                            <form class="col l5" style="">
                                <div class="search-wrapper card">
                                    <input id="search"><i class="material-icons">search</i>
                                    <div class="search-results"></div>
                                </div>
                            </form>
                            <div class="col l5">
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
                    <div class="nav-content">
                        <div class="row">
                            <div class="col l4">
                                <!-- <ul>
                                    <li>
                                        <a href="#!" style="width: 200px;line-height: 40px;">
                                        <i class="material-icons" style="vertical-align: middle;display: inline;    line-height: inherit;">menu</i>
                                            Tất cả danh mục
                                        </a>
                                    </li>
                                </ul> -->
                            </div>
                            <div class="col l4">
                            </div>
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
            <div class="row">
                <div class=" main-nav-wrap col l3 ">
                    <ul class="">
                        <li>
                            <a href="#" style="line-height: 40px;height: 40px">Sách tiếng việt <i class="material-icons " style="vertical-align: middle;">keyboard_arrow_right</i></a>
                            <div class="nav-sub">
                                <ul>
                                    <li>
                                        <div class="nav-sub-list-box">
                                            <a href="#sach-truyen-tieng-viet"><h2>Sách Tiếng Việt</h2></a>
                                            <a href="#bestsellers/sach-truyen-tieng-viet/c316">Sách bán chạy</a>
                                            <a href="#sach-truyen-tieng-viet/c316?order=newest">Sách mới</a>
                                            <a href="#sach-truyen-tieng-viet/c316?order=discount_percent,desc">Sách giảm giá</a>
                                            <a href="#sach-hay-tiki-khuyen-doc">Sách Hay Tiki Khuyên Đọc</a>
                                            <a href="#sach-truyen-tieng-viet" class="all">Xem tất cả<i class="fa fa-caret-right"></i> </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nav-sub-list-box">
                                            <h2>Công ty phát hành</h2>
                                            <a href="#cty-sach/tre.html">NXB Trẻ</a>
                                            <a href="#cty-sach/nha-nam.html">Nhã Nam</a>
                                            <a href="#cty-sach/alphabooks.html">Alphabooks</a>
                                            <a href="#cty-sach.html" class="all">Xem tất cả<i class="fa fa-caret-right"></i> </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nav-sub-list-box">
                                            <a href="#sach-tieng-anh"><h2>Tác giả</h2></a>
                                            <a href="#bestsellers/sach-tieng-anh/c320">Best Sellers</a>
                                            <a href="#sach-tieng-anh/c320?order=newest">New Releases</a>
                                            <a href="#sach-tieng-anh" class="all">Xem tất cả<i class="fa fa-caret-right"></i> </a>
                                            <a href="#ebook/c5290?order=newest"><h2>Sách tiếng việt bán chạy</h2></a>
                                            <a href="#ebook/c5290?order=newest"><h2>Sách tiếng việt Gợi ý</h2></a>
                                            <a href="#ebook/c5290?order=newest"><h2>Sách tiếng việt trong tháng</h2></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Sách tiếng anh</a></li>
                        <li><a href="#">Sách giáo dục</a></li>
                    </ul>
                </div>
                <div class=" main-nav-wrap col l9 "></div>

            </div>
        </div><!-- /container -->
    </header><!-- /header -->
    @show
    <main class="wrap">
        <div class="container">
                @yield('content')
        </div>
    </main>
    @section('footer')
    <footer class="page-footer" >
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2014 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
      </div>
    </footer>
    @show
</body>
</html>