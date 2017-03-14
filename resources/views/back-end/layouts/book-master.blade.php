@extends('back-end.layouts.master')
@section('left-sidebar')
  <ul class="nav nav-pills nav-stacked">
    <li role="presentation" class="active">
        <a href="{{ route('book.create') }}" id="sub_studyresults">
            <span class="linkwrap">Thêm sach</span>
        </a>
    </li>
  </ul>
@stop
@section('content')
  @yield('book-content')
@stop
@section('footer')
  {{-- <script src="{{ URL::asset('lib/controller/NewsController.js') }}"></script> --}}
@stop
