<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use Storage;

use App\Book;

use App\Author;

use App\Category;

use App\Http\Controllers\CategoryController;

use App\Http\Controllers\CompanyController;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('level');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        return view('back-end.book.index');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listAuthor=$this->getAuthor();
        $cate=CategoryController::getSelect(0);
        $listCompany=CompanyController::getlistCompany();
        $house= $this->getPublishingHouse();
        return view('back-end.book.create',[
            'cate'=>$cate,
            'house'=>$house,
            'listAuthor'=>$listAuthor,
            'listCompany'=>$listCompany,
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
        // dd($request->file('fileBookImage'));
        $validator = Validator::make($request->all(), [
            // "txtBook_name" => null
            //   "txtAuthor" => null
            //   "txtDescription" => null
            //   "fBook_image" => null
            //   "txtCategory" => null
            //   "txtCompany" => null
            //   "txtPublish_date" => null
            //   "txtPublish_house" => null
            //   "txtQuality" => null
            //   "txtPage" => null
            //   "txtTranslator" => null
            //   "txtCover_price" => null
            //   "txtPrice" => null
            //   "txtImages" => null
        ]);
        if ($validator->fails()) {
            return redirect()
                        ->route('book.edit',$id)
                        ->withErrors($validator)
                        ->withInput();
        }
        $txtImages = array();
        if ($request->txtImages!=null) {
            foreach ($request->txtImages as  $value) {
                $txtImages[]=$value;
            }
        }
        $book = new Book;

        $book->book_name        = $request->txtBook_name;
        $book->description      = $request->txtDescription;
        $book->publish_date     = $request->txtPublish_date;
        $book->author_id        = $request->txtAuthor;
        $book->company_id       = $request->txtCompany;
        $book->category_id      = $request->txtCategory;
        $book->publishing_house = $request->txtPublish_house;
        $book->translator       = $request->txtTranslator;
        $book->number_of_pages  = $request->txtPage;
        $book->quality          = $request->txtQuality;
        $book->price            = $request->txtPrice;
        $book->cover_price      = $request->txtCover_price;
        $book->book_image       = $request->txtAvatarBook;
        $book->images           = json_encode($txtImages);

        $book->save();
        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listAuthor=$this->getAuthor();
        $listCompany=CompanyController::getlistCompany();
        $book=Book::find($id);
        $cate=CategoryController::getSelect($book->category_id);
        $house= $this->getPublishingHouse();
        return view('back-end.book.edit',
            [
                'book'=>$book,
                'cate'=>$cate,
                'house'=>$house,
                'listAuthor'=>$listAuthor,
                'listCompany'=>$listCompany,
            ]);
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
        $validator = Validator::make($request->all(), [
            // "txtBook_name" => null
            //   "txtAuthor" => null
            //   "txtDescription" => null
            //   "fBook_image" => null
            //   "txtCategory" => null
            //   "txtCompany" => null
            //   "txtPublish_date" => null
            //   "txtPublish_house" => null
            //   "txtQuality" => null
            //   "txtPage" => null
            //   "txtTranslator" => null
            //   "txtCover_price" => null
            //   "txtPrice" => null
            //   "txtImages" => null
        ]);
        if ($validator->fails()) {
            return redirect()
                        ->route('book.edit',$id)
                        ->withErrors($validator)
                        ->withInput();
        }
        $txtImages = array();
        if ($request->txtImages!=null) {
            foreach ($request->txtImages as  $value) {
                $txtImages[]=$value;
            }
        }
        $book = Book::find($id);
        
        $book->book_name        = $request->txtBook_name;
        $book->description      = $request->txtDescription;
        $book->publish_date     = $request->txtPublish_date;
        $book->author_id        = $request->txtAuthor;
        $book->company_id       = $request->txtCompany;
        $book->category_id      = $request->txtCategory;
        $book->publishing_house = $request->txtPublish_house;
        $book->translator       = $request->txtTranslator;
        $book->number_of_pages  = $request->txtPage;
        $book->quality          = $request->txtQuality;
        $book->price            = $request->txtPrice;
        $book->cover_price      = $request->txtCover_price;
        $book->book_image       = $request->txtAvatarBook;
        $book->images           = json_encode($txtImages);

        $book->save();
        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Book::find($id)!=null) {
            Book::destroy($id);
            return redirect()->route('book.index');
        }else{
            return 'Có lỗi xảy ra';
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getlist()
    {
        return Book::orderBy('updated_at','desc')
                    ->select('books.id','book_name','author_name','book_image','publish_date','company_name','category_name')
                    ->leftJoin('authors', 'books.author_id', '=', 'authors.id')
                    ->leftJoin('companies', 'books.company_id', '=', 'companies.id')
                    ->leftJoin('categories', 'books.category_id', '=', 'categories.id')
                    ->get();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function getPublishingHouse()
    {
        return Book::select('publishing_house')->orderBy('publishing_house', 'asc')->distinct()->get();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function getAuthor()
    {
        return Author::getlistAuthor();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function uploadImagesBook(Request $request){
        $files = $request->file('file');
        if(!empty($files)):
            foreach($files as $file):
                $info=pathinfo($file->getClientOriginalName());
                $name='book-image/'.$info['filename'].time().'.'.$info['extension'];
                Storage::put($name, file_get_contents($file));
                $url[] = Storage::url('app/'.$name);
            endforeach;
        endif;
        return \Response::json(array('success' => true,'files'=>$url));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function uploadAvatarBook(Request $request){
        $file = $request->file('file');
        if(!empty($file)):
            $info=pathinfo($file->getClientOriginalName());
            $name='book-image/'.$info['filename'].time().'.'.$info['extension'];
            Storage::put($name, file_get_contents($file));
            $url = Storage::url('app/'.$name);
        endif;
        return \Response::json(array('success' => true,'file'=>$url));
    }
}
