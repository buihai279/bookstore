@section('title')
Trang chủ  
@stop
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
    <script type="text/javascript">
    	$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
    $('#modal1').modal('open');
  });

    </script>
    <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>TEST</h4>
      <p class="red-text">username: <b>buihai2603@gmail.com</b> <br> pass: <b>123456</b></p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
@stop