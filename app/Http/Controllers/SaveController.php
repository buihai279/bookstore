<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

use App\Save;

use Auth;

use DateTime;

class SaveController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('front-end.users.save');die();
        $books=array();
        $booksId=Save::select('book_id')->where('user_id','=',Auth::id())->groupBy('book_id')->get(); //lấy tổng số đơn hàng của user
        
        foreach ($booksId as  $book) {
            $books[]=Book::getBookByBookId( $book->book_id);
        }

        return BaseClass::handlingView('front-end.users.save',[
                            'books'             =>$books
                        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idUser=Auth::id();
        $bookId=$request->bookId;
        $getSave=Save::select('user_id','book_id')
                    ->where('user_id','=',$idUser)
                    ->where('book_id','=',$bookId)
                    ->get()
                    ->first();

        if ($getSave==null) {

            $save = new Save;
            $save->user_id = $idUser;
            $save->book_id = $bookId;

            $save->save();
            return redirect()->back();
        } else {
            return 'Có lỗi xảy ra';
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($bookId)
    {
        $save=Save::where('user_id','=',Auth::id())
                    ->where('book_id','=',$bookId)
                    ->get()
                    ->first();

        if ($save!=null) {
            Save::destroy($save->id);
            return redirect()->route('save.index');
        }
        
        return;
    }
    public function save_add(Request $request)
    {
        $idUser=Auth::id();
        dd($request);
        
    }
    
}
