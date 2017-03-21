@extends('front-end.layouts.master')
@section('content')
    <div class="row home-slide">
        <div class=" main-nav-wrap col l3 ">
            @include('front-end.layouts.menu')
        </div>
		<div class="col l9 swiper-slide">
            @include('front-end.layouts.slide')
		</div>
	</div>
    @include('front-end.layouts.section')
@stop