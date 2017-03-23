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
    <script src="{{ URL::asset('lib/jquery.number.min.js') }}"></script>
    <script src="{{ URL::asset('bh279_front-end/js/myscript.js') }}"></script>
</head>
<body >
    @section('header')
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