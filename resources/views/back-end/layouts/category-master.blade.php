@extends('back-end.layouts.master')
@section('left-sidebar')
<script src="{{ URL::asset('bh279_back-end/js/jquery-ui.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('bh279_back-end/css/jquery-ui.theme.min.css') }}">
  <ul>
    <li>
        <a href="#" id="sub_studyresults">
            <span class="linkwrap">Sắp xếp danh mục</span>
        </a>
    </li>
    <li>
        <a href="{{ route('indexUser') }}" id="sub_studyresults">
            <span class="linkwrap">Danh mục sách</span>
        </a>
    </li>
    <li>
        <a href="{{ route('indexUser') }}" id="sub_studyresults">
            <span class="linkwrap">Danh mục sách</span>
        </a>
    </li>
    <li>
        <a href="{{ route('indexUser') }}" id="sub_studyresults">
            <span class="linkwrap">Danh mục sách</span>
        </a>
    </li>
  </ul>
@stop
@section('content')
  @yield('user-content')
@stop
@section('footer')
  <script src="{{ URL::asset('lib/controller/CategoryController.js') }}"></script>
  <script src="{{ URL::asset('bh279_back-end/js/sortable-admin.js') }}"></script>
@stop
