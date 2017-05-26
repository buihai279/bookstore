@extends('back-end.layouts.master')
@section('content')
        <div class="col l12  m12  s12">
            @yield('user-content')
        </div>
           <div class="fixed-action-btn toolbar">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">menu</i>
    </a>
    <ul>
      <li class="waves-effect waves-light red"><a href="{{ route('category.create') }}"><i class="material-icons">insert_chart</i>Them danh muc</a></li>
    </ul>
  </div>
@stop
@section('footer')
  {{-- <script src="{{ URL::asset('lib/controller/CategoryController.js') }}"></script> --}}
  <script src="{{ URL::asset('bh279_back-end/js/sortable-admin.js') }}"></script>
@stop
