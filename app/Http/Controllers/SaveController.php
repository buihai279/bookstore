<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Save;
use App\Category;
use App\Author;
use App\Company;
use Auth;
use DateTime;
class SaveController extends Controller
{
    protected $categories;
    protected $categoriesChild;
    protected $authorsChild;
    protected $companyChild;
    protected $categoryAll;
    /**
     * Create a new controller instance.
     *
     * @return void
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('front-end.users.save');die();
        $books=array();
        $booksId=Save::select('book_id')->where('user_id','=',Auth::id())->groupBy('book_id')->get();
        foreach ($booksId as  $book) {
            $books[]=Book::getBookByBookId( $book->book_id);
        }
        return view('front-end.users.save',[
                        'categories'        =>$this->categories,
                        'categoriesChild'   =>$this->categoriesChild,
                        'companyChild'      =>$this->companyChild,
                        'authorsChild'      =>$this->authorsChild,
                        'books'             =>$books
                    ]);
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
        if (Save::find($id)!=null) {
            Save::destroy($id);
            return redirect()->route('save.index');
        }
    }
}
