@extends('front-end.layouts.master')
@section('content')
<div class="row">
  @if (Cart::count()>0)
    <div class="col l9"><h5>Giỏ hàng ({{Cart::count()}} sản phẩm)</h5>
      <form action="{{ route('cart.updateCart') }}" method="POST">
        {{ csrf_field() }}
        <table class="bordered">
            <thead>
                <tr>
                    <th style="width: 20%"></th>
                    <th style="width: 40%">Product</th>
                    <th style="width: 10%">Qty</th>
                    <th style="width: 15%">Price</th>
                    <th style="width: 15%">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach (Cart::content() as $row)
                  <tr>
                      <td>
                        <img class="responsive-img" src="{{url($booksInCart[$row->id]->book_image)}}">
                      </td>
                      <td>
                          <p><a href="{{ route('viewBook',$row->id) }}"><strong>{{$row->name}}</strong></a></p>
                          <p class="seller-by" style="font-size: 12px">
                              Cung cấp bởi 
                              <span class="firm">
                                <a href="{{ route('viewCompany',$booksInCart[$row->id]->companyId) }}">
                                {{$booksInCart[$row->id]->company_name }}
                                </a>
                              </span>
                          </p>
                          @if ($booksInCart[$row->id]->quality<=10&&$booksInCart[$row->id]->quality>0)
                              <p class="red-text" style="font-size: 12px">Chỉ còn {{$booksInCart[$row->id]->quality}} cuốn </p>
                          @elseif($booksInCart[$row->id]->quality<=0)
                              <p class="red-text" style="font-size: 12px">Sản phẩm hết hàng</p>
                          @endif
                              <p class="" style="font-size: 13px">
                                <a href="javascript:void(0);" class="btn-item-delete" data-product-id="{{$row->rowId}}">
                                    Xóa
                                </a>
                                 &nbsp;| &nbsp;
                                <a href="javascript:void(0);" class="btn-save-for-later" data-product-id="{{$row->id}}">
                                    Để dành mua sau
                                </a>
                            </p>
                      </td>
                      <td><input type="number" name="rowIds[{{$row->rowId}}]" value="{{$row->qty}}" class="number-format"></td>
                      <td><span class="number-format">{{$row->price}}</span> <span> &nbsp;₫</span></td>
                      <td><span class="number-format">{{$row->subtotal}}</span> <span> &nbsp;₫</span></td>
                  </tr>
                  {{-- expr --}}
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn" name="btnUpdate" value="update">Cập nhật giỏ hàng</button>
        <a  class="btn" href="{{ route('order.create') }}">Thanh toán</a>
      </form>
    </div>
    <div class="col l3">
      <table style="border:1px solid #f2f2f2;border-radius: 4px;">
            <tbody>
              <tr>
                <td>Tổng tiền</td>
                <td><span class="number-format">{{Cart::subtotal()}}</span> <span> &nbsp;₫</span></td>
              </tr>
              <tr>
                <td>Mã Giảm giá:</td>
                <td><span class="number-format">1212</span>&nbsp;₫</td>
              </tr>
              <tr>
                <td>Thuế:</td>
                <td><span class="number-format">{{Cart::tax()}}</span> <span> &nbsp;₫</span></td>
              </tr>
              <tfoot style="border-top: 2px solid red">
                <td>Thành tiền </td>
                <td>
                  <h5 class="red-text " style="font-size:16px;">
                    <span class="number-format">{{Cart::total()}}</span><span> &nbsp;₫</span>
                  </h5> 
                </td>
              </tfoot>
            </tbody>
          </table>
            <ul class="collapsible" data-collapsible="accordion">
            <li class="active">
              <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
              <div class="collapsible-body">
            
                <form action="">
                  <div class="input-field">
                    <input id="txtcoupon" type="text" name="txtCoupon" class="validate">
                    <label for="txtcoupon">Nhập mã giảm giá</label>
                    </div>
                <button class="btn waves-effect waves-light" type="submit" name="action">Xác nhận
                  <i class="material-icons right">send</i>
                </button>
                </form>
              </div>
            </li>
          </ul>
    </div>
  @else
    <p class="red-text" style="height: 400px;">Không có sản phẩm nào trong giỏ hàng</p>
  @endif
</div>
{{-- end .row --}}
@foreach (Cart::content() as $row)
  <form action="{{ route('cart.destroy',$row->rowId) }}" data-form-id='{{$row->rowId}}' method="POST" style="display: none;">
  {{ method_field('DELETE') }}
    {{ csrf_field() }}
  </form>
@endforeach
@stop