@extends('back-end.layouts.master')
@section('left-sidebar')
  <ul class="nav nav-pills nav-stacked">
    <li role="presentation" class="active">
        <a href="{{ route('author.create') }}" id="sub_studyresults">
            <span class="linkwrap">Thêm tác giả</span>
        </a>
    </li>
  </ul>
@stop
@section('content')
  @yield('author-content')
@stop
@section('footer')
  {{-- <script src="{{ URL::asset('lib/controller/UserController.js') }}"></script> --}}
@stop
