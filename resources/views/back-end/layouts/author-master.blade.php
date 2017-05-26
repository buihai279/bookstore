@extends('back-end.layouts.master')
@section('content')
        <div class="col l12  m12  s12">
  @yield('author-content')
        </div>   
        <div class="fixed-action-btn toolbar">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">menu</i>
    </a>
    <ul>
      <li class="waves-effect waves-light red"><a href="{{ route('author.create') }}"><i class="material-icons">insert_chart</i>Thêm Tac gia</a></li>
    </ul>
  </div>
@stop
@section('footer')
  {{-- <script src="{{ URL::asset('lib/controller/UserController.js') }}"></script> --}}
@stop
