@extends('front-end.users.master')
@section('user-content')
<h5>Theo dõi đơn hàng</h5>
<form action="save_submit" method="POST" accept-charset="utf-8">
    <ul class="collection">
    <table class="bordered highlight">
        <thead>
          <tr>
              <th>Mã</th>
              <th>Ngày mua</th>
              <th width="50%">Sách</th>
              <th width="10%">Tổng tiền</th>
              <th width="10%">Trạng thái đơn hàng</th>
              <th width="10%">Tình trạng thanh toán</th>
          </tr>
        </thead>

        <tbody>
        @foreach ($orders as $order)
          <tr>
            <td>{{$order->orderId}}</td>
            <td>{{$order->orderCreatedAt}}</td>
                @if (is_array($books[$order->orderId])&&count($books[$order->orderId])>0)
                <td>
                  {{$books[$order->orderId][0]->book_name}} 
                  @if(count($books[$order->orderId])>1)
                    ... và {{count($books[$order->orderId])-1}} quyển khác</td>
                  @endif
                @else
                  <td></td>
                @endif
            <td>
              <span id="span-saving-price" class="number-format">
                {{$order->orderAmount}}
              </span> ₫
            </td>

          
            <td>{{$order->orderStatus}}</td>
            <td>{{$order->paymentStatus}}</td>
          </tr>
  @endforeach
        </tbody>
      </table>
            

  </ul>
</form>
@stop 