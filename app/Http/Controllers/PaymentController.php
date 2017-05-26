<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\Payment;

use App\Order;

class PaymentController extends Controller
{
    public function __construct()
    {
        // $this->middleware('level');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function success()
    {
        $token=Input::get('token');

        $orderId=Input::get('orderId');

        $payment=Payment::where('remember_token','=',$token)->get()->first();

        $payment->payment_status='Đã thanh toán';

        $payment->save();

        return redirect()->route('homepage');
    }
    public function cancel()
    {
        $token=Input::get('token');

        $orderId=Input::get('orderId');

        $payment=Payment::where('remember_token','=',$token)->get()->first();

        $payment->payment_status='Không thanh toán';

        $payment->save();

        $order=Order::where('payment_id','=',$payment->id)->get()->first();

        $order->order_status='Hủy đơn hàng';

        $order->save();

        return redirect()->route('homepage');

    }
}
