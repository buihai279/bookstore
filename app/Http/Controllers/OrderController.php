<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Author;
use App\Order;
use App\OrderDetail;
use App\Company;
use App\Book;
use App\Payment;
use Auth;
use Cart;
class OrderController extends Controller
{
    protected $categories;
    protected $categoriesChild;
    protected $authorsChild;
    protected $companyChild;
    protected $categoryAll;
      public function __construct()
    {
        // $this->middleware('auth');
        $this->categories=Category::getCategoriesByParentID(0);//lấy danh mục theo paarent id truyền vào
        $this->categoryAll=Category::getAll();//lấy toàn bộ danh mục
        foreach ($this->categories as $value) {
            $this->categoriesChild[$value->id]=Category::getCategoriesByParentID($value->id);
            $listCate=CategoryController::getAllIdCategories($this->categoryAll,$value->id);
            $this->authorsChild[$value->id]=Author::getTopAuthorInCategories($listCate);
            $this->companyChild[$value->id]=Company::getTopCompanyInCategories($listCate);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('front-end.checkout',[
                        'categories'        =>$this->categories,
                        'categoriesChild'   =>$this->categoriesChild,
                        'companyChild'      =>$this->companyChild,
                        'authorsChild'      =>$this->authorsChild,
                        // 'slides'            =>$slides,
                    ]);
        // dd($request);
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function store(Request $request)
    {
        $fee=(Cart::total()>=200000)?0:20000;
        $totalPay=Cart::total()+$fee;
        $payment=new Payment;
        $payment->payment_status='Chưa thanh toán';
        $payment->payment_type=($request->methodPay=='atm')?'Thanh toán bằng thẻ ATM':'Thanh toán tại nhà';
        $payment->amount=$totalPay;
        $payment->remember_token=$request->_token.time();
        $payment->save();

        $order = new Order;
        $order->user_id = Auth::id();
        $order->order_status = 'Đang xử lý đơn hàng';
        $order->payment_id = $payment->id;
        $order->shipping_address = $request->address;
        $order->phoneReceiver = $request->phone;
        $order->nameReceiver = $request->fullName;
        $order->shipping_fee = (Cart::total()>=200000)?0:20000;
        $order->save();

        foreach (Cart::content() as $row) {
            $orderDetail = new OrderDetail;
            $orderDetail->order_id = $order->id;
            $orderDetail->book_id = $row->id;
            $orderDetail->price = $row->price;
            $orderDetail->quality = $row->qty;
            $orderDetail->save();
        }
        Cart::destroy();
        return redirect()->route('homepage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
