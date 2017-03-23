@extends('front-end.layouts.master')
@section('content')
<div class="row">
  <div class="col l3">
    <div class="collection">
        <a href="#!" class="collection-item">
          Đổi mật khẩu<i class="material-icons">send</i>
        </a>
        <a href="#!" class="collection-item">
          Thay đổi địa chỉ<i class="material-icons">send</i>
        </a>
        <a href="#!" class="collection-item">
          Quản lý đơn hàng<i class="material-icons">send</i>
        </a>
        <a href="#!" class="collection-item">
          Sản phẩm mua sau<i class="material-icons">send</i>
        </a>
        <a href="#!" class="collection-item">
          Sản phẩm bạn đã xem<i class="material-icons">send</i>
        </a>
        <a href="#!" class="collection-item">
          Bình luận của bạn<i class="material-icons">send</i>
        </a>
    </div>
  </div>
  <div class="col l9">
    @yield('user-content')
  </div>
</div>
@stop