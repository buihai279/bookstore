@extends('back-end.layouts.master')
@section('left-sidebar')
@section('content')   
<div class="fixed-action-btn toolbar">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">menu</i>
    </a>
    <ul>
      <li class="waves-effect waves-light red"><a href="{{ route('slide.create') }}"><i class="material-icons">insert_chart</i>Thêm Slide</a></li>
    </ul>
  </div>
        <div class="col l12  m12  s12">

  @yield('slide-content')
        </div>
@stop
@section('footer')
  {{-- <script src="{{ URL::asset('lib/controller/SlideController.js') }}"></script> --}}
@stop
