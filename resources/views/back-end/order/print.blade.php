<script src="{{ URL::asset('bh279_front-end/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('bh279_front-end/js/myscript.js') }}"></script>
<script src="{{ URL::asset('lib/jquery.number.min.js') }}"></script>
 @foreach ($orders as $order)
    <div class="content-right" style="margin: 30px;">
        <h1 class="have-margin">Chi tiết đơn hàng #{{$order->orderId}} - <strong>{{$order->order_status}}</strong></h1>
        <p class="date">Ngày đặt hàng: {{$order->orderCreatedAt}}</p>
        <div class="account-order-detail">
            <div class="address-1">
                <h3>
                Địa chỉ người nhận        </h3>
                <div>
                    <p class="name"><b>Tên người nhận: </b>{{$order->nameReceiver}}</p>

                    <p><b>Địa chỉ: </b>{{$order->shipping_address}}</p>

                    <p><b>Điện thoại:</b> {{$order->phoneReceiver}}</p>
                </div>
            </div>



            <div class="payment-2 has-padding">
                <h3>Phương thức thanh toán</h3>
                <div>
                    <p>{{$order->payment_type}}</p>
                </div>


            </div>
        </div>
        <div class="dashboard-order have-margin">
            <table class="table-responsive-2" cellspacing="0">
                <thead>
                    <tr>
                        <th>Mã</th>
                        <th>Tên sách</th>
                        <th>Giá bán</th>
                        <th>Số lượng mua</th>
                        <th>Tạm tính</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books[$order->orderId] as $book)<tr>
                        <td>{{$book->bookId}}</td>
                        <td style="text-align: left;">
                            <a class="name" href="">{{$book->book_name}}</a>
                        </td>
                        <td class="number-format">{{$book->price}}</td>
                        <td>{{$book->totalqty}} </td>
                        <td class="number-format">{{$book->price*$book->totalqty}}</td>
                    </tr>

                    @endforeach
                    @php
                    $t=0;
                        foreach ($books[$order->orderId] as  $book) {
                            $t+=$book->price*$book->totalqty;
                        }
                    @endphp


                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4"><span>Chi phí vận chuyển</span>
                        </td>
                        <td>{{$order->shipping_fee}}</td>
                    </tr>

                    <tr>
                        <td colspan="4"><span>VAT</span>
                        </td>
                        <td class="number-format">{{$t*.1}}</td>
                    </tr>

                    <tr>
                        <td colspan="4"><span>Tổng cộng</span>
                        </td>
                        <td><b class="sum number-format">{{$order->amount}}</b>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endforeach
<script>
    // function print
    document.addEventListener("DOMContentLoaded", function(event) { 
      window.print()
    });
</script>
<style type="text/css">
    td,th{
         border: .75px solid;
         text-align: center;
    }
    a{
        text-decoration: none;
        color: #000;
    }
</style>