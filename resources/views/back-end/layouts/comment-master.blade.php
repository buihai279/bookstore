@extends('back-end.layouts.master')
@section('left-sidebar')
@section('content')
<div class="col l12  m12  s12">
  @yield('comment-content')
</div>
@stop
@section('footer')
  {{-- <script src="{{ URL::asset('lib/controller/UserController.js') }}"></script> --}}
@stop
