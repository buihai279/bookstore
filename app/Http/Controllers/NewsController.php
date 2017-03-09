<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back-end.news.index');

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.news.create');
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
        $validator = Validator::make($request->all(), [
            'txtTitle' => 'required',
            'txtDescription' => 'required',
            'txtContent' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()
                        ->route('news.create')
                        ->withErrors($validator)
                        ->withInput();
        }
        $news = new News;

        $news->title = $request->txtTitle;

        $news->description = $request->txtDescription;

        $news->content = $request->txtContent;;
        $news->save();
        return redirect()->route('news.index');
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
        $news=News::find($id);
        return view('back-end.news.edit',['news'=>$news]);
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
            // 'txtNamenews' => 'required|min:1',
            // 'txtnewsInfo' => '',
            // 'filenewsImg' => 'max:255',
        ]);
        if ($validator->fails()) {
            return redirect()
                        ->route('news.edit',$id)
                        ->withErrors($validator)
                        ->withInput();
        }
        $news = News::find($id);
        // $news->news_name = $request->txtNamenews;
        // $news->news_info = $request->txtnewsInfo;
        // $news->news_image = $request->filenewsImg;
        $news->save();
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (News::find($id)!=null) {
            News::destroy($id);
            return redirect()->route('news.index');
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
        return News::orderBy('updated_at','desc')->get();
    }
}
