@extends('back-end.layouts.master')
@section('left-sidebar')
  <ul class="nav nav-pills nav-stacked">
    <li role="presentation" class="active">
        <a href="{{ route('company.create') }}" id="sub_studyresults">
            <span class="linkwrap">Thêm nhà cung cấp sách</span>
        </a>
    </li>
  </ul>
@stop
@section('content')
  @yield('company-content')
@stop
@section('footer')
  {{-- <script src="{{ URL::asset('lib/controller/UserController.js') }}"></script> --}}
@stop
