@extends('back-end.layouts.master')
@section('left-sidebar')
  <ul class="nav nav-pills nav-stacked">
    <li role="presentation" class="active">
        <a href="{{ route('slide.create') }}" id="sub_studyresults">
            <span class="linkwrap">Thêm Slide</span>
        </a>
    </li>
  </ul>
@stop
@section('content')
  @yield('slide-content')
@stop
@section('footer')
  {{-- <script src="{{ URL::asset('lib/controller/SlideController.js') }}"></script> --}}
@stop
