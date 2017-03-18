@extends('back-end.layouts.master')
{{-- @section('left-sidebar') --}}
   <div class="fixed-action-btn toolbar">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">menu</i>
    </a>
    <ul>
      <li class="waves-effect waves-light red"><a href="{{ route('book.create') }}"><i class="material-icons">insert_chart</i>Thêm sách</a></li>
      <li class="waves-effect waves-light yellow"><a href="#!"><i class="material-icons">format_quote</i></a></li>
      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">publish</i></a></li>
      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
{{-- @stop --}}
@section('content')
    {{-- <div class="col l10  m10  s12"> --}}
		@yield('book-content')
    {{-- </div> --}}
@stop
@section('footer')
  {{-- <script src="{{ URL::asset('lib/controller/NewsController.js') }}"></script> --}}
@stop
