@extends('back-end.layouts.master')
@section('left-sidebar')
        <div class="col l2  m2  s3 menu">

			  <ul class="nav nav-pills nav-stacked">
			    <li role="presentation" class="active">
			        <a href="{{ route('news.create') }}" id="sub_studyresults">
			            <span class="linkwrap">Thêm tin tức</span>
			        </a>
			    </li>
			  </ul>
        </div>
@stop
@section('content')
        <div class="col l10  m10  s12">

  @yield('news-content')
        </div>
@stop
@section('footer')
  {{-- <script src="{{ URL::asset('lib/controller/NewsController.js') }}"></script> --}}
@stop
