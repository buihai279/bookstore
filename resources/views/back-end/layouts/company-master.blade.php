@extends('back-end.layouts.master')
@section('content')   <div class="fixed-action-btn toolbar">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">menu</i>
    </a>
    <ul>
      <li class="waves-effect waves-light red"><a href="{{ route('company.create') }}"><i class="material-icons">insert_chart</i>Thêm sách</a></li>
    </ul>
  </div>
        <div class="col l12  m12  s12">

  @yield('company-content')
        </div>
@stop
@section('footer')
  {{-- <script src="{{ URL::asset('lib/controller/UserController.js') }}"></script> --}}
@stop
