@extends('back-end.layouts.master')
@section('left-sidebar')
        <div class="col l2  m2  s3 menu">

		  <ul class="nav nav-pills nav-stacked">
		    <li role="presentation" class="active">
		        <a href="{{ route('slide.create') }}" id="sub_studyresults">
		            <span class="linkwrap">Thêm Slide</span>
		        </a>
		    </li>
		  </ul>
        </div>
@stop
@section('content')
        <div class="col l10  m10  s12">

  @yield('slide-content')
        </div>
@stop
@section('footer')
  {{-- <script src="{{ URL::asset('lib/controller/SlideController.js') }}"></script> --}}
@stop
