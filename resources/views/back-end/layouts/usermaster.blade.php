@extends('back-end.layouts.master')
@section('left-sidebar')
  <ul class="nav nav-pills nav-stacked">
    <li role="presentation" class="active">
        <a href="{{ route('indexUser') }}" id="sub_studyresults">
            <span class="linkwrap">Danh sách người dùng</span>
        </a>
    </li>
  </ul>
@stop
@section('content')
  @yield('user-content')
@stop
@section('footer')
  <script src="{{ URL::asset('lib/controller/UserController.js') }}"></script>
@stop
