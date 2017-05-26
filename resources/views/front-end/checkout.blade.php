@section('title')
Thanh toán 
@stop
@extends('front-end.layouts.master')
@section('content')
  <form action="{{ route('order.store') }}" method="POST">
    {{csrf_field()}}
    <div class="row">
      <div class="col l8">
        <h4>
          Thông tin và địa chỉ người nhận hàng
        </h4>
        @php
          if (Auth::guest()){
            $name='';
            $phone='';
            $address='';
          }else{
            $name=Auth::user()->name;
            $phone=Auth::user()->phone;
            $address=Auth::user()->address;
          }
        @endphp
        @if (!Auth::guest())
          <div class="card-panel">
            <p class="name">{{$name}}</p>
            <p class="address" title="">
                {{$address}}
            </p>
            <p class="phone">Điện thoại: {{$phone}}</p>
            <p>
              <input type="checkbox" class="filled-in" id="infoUserCheckbox" checked="checked" />
              <label for="infoUserCheckbox">Sử dụng Họ tên &amp; Số điện thoại của địa chỉ giao hàng</label>
            </p>
          </div>
         @endif
        <div id="order_address_hide" @if (!Auth::guest()) style="display: none;" @endif class="card-panel">
          <h5>Thông tin người nhận</h5>
          <div class="input-field">
            <input id="last_name" name="fullName" type="text" value="{{$name}}">
            <label for="last_name">Họ và Tên</label>
          </div>
          <div class="input-field">
            <input id="phone" name="phone" type="text" value="{{$phone}}">
            <label for="phone">Số điện thoại</label>
          </div>
          <div class="input-field">
            <input id="address" name="address" type="text" value="{{$address}}">
            <label for="address">Địa chỉ</label>
          </div>
        </div>
        <div class="card-panel">
          <i class="material-icons">local_shipping</i>
             Giao hàng tiêu chuẩn chậm nhất 2 ngày
             {{-- (dự kiến giao hàng vào Thứ bảy, 25/03/2017 - Thứ hai, 27/03/2017, không giao ngày Chủ Nhật) --}}
        </div>
          <h3 class="step-title">Chọn hình thức thanh toán</h3>
          <div class="card-panel">
            <p>
              <input  name="methodPay" value="cod" type="radio" id="test1" />
              <label for="test1">Thanh toán tiền mặt khi nhận hàng</label>
            </p>
            <p>
              <input  name="methodPay" value="atm" type="radio" id="test2" checked />
              <label for="test2">Thẻ ATM đăng ký Internet Banking (Miễn phí thanh toán) Được bảo trợ bởi BaoKim.vn</label>
            </p>
            <p>
              <button class="btn waves-effect waves-light" type="submit" name="action">ĐẶT MUA
                <i class="material-icons right">send</i>
              </button>
              <p class="note">(Xin vui lòng kiểm tra lại đơn hàng trước khi Đặt Mua)</p>
            </p>
          </div>
      </div>
      <div class="col l4">
        <div class="panel-body">
          <div class="order">
            <span class="title">Đơn Hàng</span>
            <span class="title"> ({{Cart::count()}} sản phẩm)</span>
            <a href="{{ route('cart.index') }}" class="btn">Sửa</a>
          </div>
          <div class="product">
             @foreach (Cart::content() as $row)
              <div class="item">
                <p class="title">
                    <strong>{{$row->qty}} x</strong><a href="" target="_blank">{{$row->name}}</a>
                </p>
                <p class="price">
                    <span>{{$row->subtotal}}</span>&nbsp;₫
                </p>
              </div>
            @endforeach
          </div>
          <p class="list-info-price">
            <b>Tạm tính: </b>
            <span>
              {{Cart::subtotal()}}</span>&nbsp;₫
          </p>
          <p class="list-info-price">
              <b>Giảm giá: </b>
              <span>(0)</span>&nbsp;₫
          </p>
          <p class="list-info-price">
              <b>Phí vận chuyển: </b>
              <span>
                @php
                  if (Cart::total()>200000)
                    $shipfee=0;# code...
                  else
                    $shipfee=20000;
                  echo $shipfee;
                @endphp
              </span>&nbsp;₫
          </p>
          <p class="list-info-price">
              <b>Thuế VAT: </b>
              <span>
               {{Cart::tax()}}
              </span>&nbsp;₫
          </p>
          <p class="total2">
              <b>Thành tiền:</b>
              <span>{{Cart::total()+$shipfee}}</span>&nbsp;₫
          </p>
        </div>
      </div>
    </div>

<img src="http://www.baokim.vn/developers/uploads/baokim_btn/thanhtoan-l.png" alt="Thanh toán an toàn với Bảo Kim !" border="0" title="Thanh toán trực tuyến an toàn dùng tài khoản Ngân hàng (VietcomBank, TechcomBank, Đông Á, VietinBank, Quân Đội, VIB, SHB,... và thẻ Quốc tế (Visa, Master Card...) qua Cổng thanh toán trực tuyến BảoKim.vn" >
</a>

  </form>
  @stop