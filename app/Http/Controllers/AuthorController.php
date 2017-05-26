<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use Storage;

use App\Author;

use Auth;

use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
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
        return view('back-end.author.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.author.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'txtNameAuthor' => 'required|min:1',
            'txtAuthorInfo' => '',
            'txtAuthorImage' => 'max:255',
        ]);
        if ($validator->fails()) {
            return redirect()
                        ->route('author.create')
                        ->withErrors($validator)
                        ->withInput();
        }
        $author = new Author;

        $author->author_name = $request->txtNameAuthor;

        $author->author_info = $request->txtAuthorInfo;

        $author->author_image = $request->txtAuthorImage;
        $author->save();
        return redirect()->route('author.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = Author::find($id)->books;
        $author=Author::find($id);
        return view('back-end.author.edit',
            [
                'author'=>$author,
                'books'=>$books
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
            'txtNameAuthor'     => 'required|min:1',
            'txtAuthorInfo'     => '',
            'txtAuthorImage'    => 'max:255',
        ]);
        if ($validator->fails()) {
            return redirect()
                        ->route('author.edit',$id)
                        ->withErrors($validator)
                        ->withInput();
        }
        $author = Author::find($id);
        $author->author_name    = $request->txtNameAuthor;
        $author->author_info    = $request->txtAuthorInfo;
        $author->author_image   = $request->txtAuthorImage;
        $author->save();
        return redirect()->route('author.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Author::find($id)!=null) {
            Author::destroy($id);
            // deletebook
            return redirect()->route('author.index');
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
        return Author::getTopAuthor();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function uploadAvatarAuthor(Request $request){
        $file = $request->file('file');
        if(!empty($file)):
            $info=pathinfo($file->getClientOriginalName());
            $name='author-image/'.$info['filename'].time().'.'.$info['extension'];
            Storage::put($name, file_get_contents($file));
            $url = Storage::url('app/'.$name);
        endif;
        return \Response::json(array('success' => true,'file'=>$url));
    }
}
