<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Author;

use App\Order;

use App\OrderDetail;

use App\Book;

use App\Payment;

use Auth;

use Cart;

class OrderController extends Controller
{

      public function __construct()
    {
        // $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back-end.order.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return BaseClass::handlingView('front-end.checkout',[]);
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function store(Request $request)
    {
        
        if (Cart::count()<1) {
            return 'Không có san pham';
        }

        $token=$request->_token.time();

        $fee=(Cart::total()>=200000)?0:20000;

        $totalPay=Cart::total()+$fee;

        $payment=new Payment;

        $payment->payment_status='Chưa thanh toán';

        $payment->payment_type=($request->methodPay=='atm')?'Thanh toán bằng thẻ ATM':'Thanh toán tại nhà';
        
        $payment->amount=$totalPay;

        $payment->remember_token=$token;

        $payment->save();

        $order = new Order;

        $order->user_id = Auth::id();

        $order->order_status = 'Đang xử lý đơn hàng';

        $order->payment_id = $payment->id;

        $order->shipping_address = $request->address;

        $order->phoneReceiver = $request->phone;

        $order->nameReceiver = $request->fullName;

        $order->shipping_fee = $fee;

        $order->save();
        $arrBook=array();

        foreach (Cart::content() as $row) {

            $book=Book::find($row->id);

            $book->quality = $book->quality-$row->qty;

            $book->save();


            $arrBook[]=$book->book_name;

            $orderDetail = new OrderDetail;

            $orderDetail->order_id = $order->id;

            $orderDetail->book_id = $row->id;

            $orderDetail->price = $row->price;

            $orderDetail->quality = $row->qty;

            $orderDetail->save();
        }
        Cart::destroy();
        if ($request->methodPay=='atm') {

            $linkCancel=urlencode(route('payment.cancel').'?token='.$token.'&orderId='.$order->id);

            $linkSuccess=urlencode(route('payment.success').'?token='.$token.'&orderId='.$order->id);

            $description=urlencode('Ghi chú');

            $productName=urlencode(implode(',', $arrBook));

            $qty=urlencode(1);

            $email=urlencode('buihai2603@gmail.com');

            $amonut=urlencode($totalPay);

            $amonut=urlencode(10000); //////test

            $linkBK='https://www.baokim.vn/payment/product/version11?business='.$email
                    .'&id=&order_description='.$description
                    .'&product_name='.$productName
                    .'&product_price='.$amonut
                    .'&product_quantity='.$qty
                    .'&total_amount='.$amonut
                    .'&url_cancel='.urlencode($linkCancel)
                    .'&url_detail='.urlencode(route('flowOrder'))
                    .'&url_success='.urlencode($linkSuccess);

            return redirect($linkBK);
        }
        return redirect()->route('homepage');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }
    public static function printOrder(Request $request)
    {
        $orders=array();

        $orders = Order::getAllOrderByOrderId($request->order);

        foreach ($orders as  $order) 
            $books[$order->orderId]=Book::getAllBookByOrderId($order->orderId);

        return view('back-end.order.print',[
                        'orders'    =>$orders,
                        'books'     =>$books
                    ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateOrders(Request $request)
    {

        if ($request->btnPrint=='submit'&&count($request->order)>=1)
            return $this->printOrder($request);

        if ($request->option==''||count($request->order)<1)
            return 'Có lỗi xảy ra';

        $arrStr1=array('Giao hàng thành công','Đơn hàng đang xử lý','Đơn hàng đang giao','Hủy đơn hàng');

        $arrStr2=array('Đã thanh toán');

        if(in_array($request->option, $arrStr1)){

            foreach ($request->order as $id) {

                if($request->option='Hủy đơn hàng'){
                    $this->destroy($id);
                }

                $order = Order::find($id);

                if($order->order_status=='Hủy đơn hàng') continue;

                $order->order_status = $request->option;

                $order->save();
            }
            
        }
        if(in_array($request->option, $arrStr2)){

            foreach ($request->order as $id) {

                $paymentId=Order::select('payment_id')->where('id','=',$id)->get()->first();

                $payment = Payment::find($paymentId);

                $payment->payment_status = $request->option;

                $payment->save();
            }
            
        }
        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ods=OrderDetail::where('order_id','=',$id)->get();
        
        foreach ($ods as  $od) {

                $book=Book::find($od->book_id);

                $book->quality = $book->quality+$od->quality;

                $book->save();
        }
    }
    public function getlist()
    {
        return Order::getAllOrder();
    }
}
