@extends('back-end.layouts.master')
@section('left-sidebar')
  <ul class="nav nav-pills nav-stacked">
    <li role="presentation" class="active">
        <a href="{{ route('news.create') }}" id="sub_studyresults">
            <span class="linkwrap">Thêm tin tức</span>
        </a>
    </li>
  </ul>
@stop
@section('content')
  @yield('news-content')
@stop
@section('footer')
  {{-- <script src="{{ URL::asset('lib/controller/NewsController.js') }}"></script> --}}
@stop
