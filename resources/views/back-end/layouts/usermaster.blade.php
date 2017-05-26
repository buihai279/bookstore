@extends('back-end.layouts.master')
@section('content')
        <div class="col l12  m12  s12">

  @yield('user-content')
        </div>
@stop
@section('footer')
  <script src="{{ URL::asset('lib/controller/UserController.js') }}"></script>
@stop
