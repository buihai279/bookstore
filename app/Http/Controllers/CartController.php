<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Author;
use App\Company;
use App\Book;
use Cart;
use App\Http\Controllers\OrderController;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function index()
    {  
        $booksInCart=array();
        foreach (Cart::content() as $key => $value) {
            $booksInCart[$value->id]=Book::getBookInCart($value->id);
        }
        return view('front-end.cart',[
                        'categories'        =>$this->categories,
                        'categoriesChild'   =>$this->categoriesChild,
                        'companyChild'      =>$this->companyChild,
                        'authorsChild'      =>$this->authorsChild,
                        'booksInCart'        =>$booksInCart,
                        // 'slides'            =>$slides,
                    ]);
    }
    public function addCart(Request $request)
    {
        $book=Book::select('id','book_name','price','quality','book_image')->find($request->txtBookId);
        // dd($book);
        if (!isset($book)) {
            return 'Có lỗi xảy ra';
        }
        if ($book->quality<$request->qty) {
            return 'Không đủ hàng để cung cấp';
        }
        Cart::add([
                'id'        => $book->id, 
                'name'      => $book->book_name, 
                'qty'       => (int)$request->qty, 
                'price'     => $book->price,
                // 'options'   =>['book_image' => $book->book_image]
            ]);
        // dd(Cart::content());
        return redirect()->route('cart.index');
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        dd($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCart(Request $request)
    {
        if ($request->btnCheckout=='checkout') {
            OrderController::create();
            die();
        }
        foreach ($request->rowIds as $rowId => $qty) {
            $id=Cart::get($rowId)->id;
            $book=Book::select('quality')->find($id);
            if ($book->quality<$qty) {
                return 'Không đủ số lượng hàng trong kho';
            }
            Cart::update($rowId, $qty);
        }
        return redirect()->route('cart.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }
}
