<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // Cart::tax(0, '.', ',');
        // print_r(Cart::count());echo "<br>";
        // print_r(Cart::tax());echo "<br>";
        // print_r(Cart::total());echo "<br>";
        dd(Cart::content());
        // return Cart::content();
        //
    }
    public function addCart(Request $request)
    {
        // dd($request);
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
                'qty'       => $request->qty, 
                'book_image'=> $book->book_image, 
                'price'     => $book->price
            ]);
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
