<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        return view('back-end.book.create');
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
        // dd($request);
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
        $book = new Book;
        $book->book_name = $request->txtBook_name;
        $book->description = $request->txtDescription;
        $book->publish_date = $request->txtPublish_date;
        $book->author_id = $request->txtAuthor;
        $book->company_id = $request->txtCompany;
        $book->category_id = $request->txtCategory;
        $book->publishing_house = $request->txtPublish_house;
        $book->translator = $request->txtTranslator;
        $book->number_of_pages = $request->txtPage;
        $book->quality = $request->txtQuality;
        $book->price = $request->txtPrice;
        $book->cover_price = $request->txtCover_price;
        $book->book_image = $request->fBook_image;
        $book->images = $request->txtImages;
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
        $book=Book::find($id);
        return view('back-end.book.edit',['book'=>$book]);
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
        $book = Book::find($id);
        $book->book_name = $request->txtBook_name;
        $book->description = $request->txtDescription;
        $book->publish_date = $request->txtPublish_date;
        $book->author_id = $request->txtAuthor;
        $book->company_id = $request->txtCompany;
        $book->category_id = $request->txtCategory;
        $book->publishing_house = $request->txtPublish_house;
        $book->translator = $request->txtTranslator;
        $book->number_of_pages = $request->txtPage;
        $book->quality = $request->txtQuality;
        $book->price = $request->txtPrice;
        $book->cover_price = $request->txtCover_price;
        $book->book_image = $request->fBook_image;
        $book->images = $request->txtImages;
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
        return Book::orderBy('updated_at','desc')->get();
    }
}
