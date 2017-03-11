<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Slide;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back-end.slide.index');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.slide.create');
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
        // dd($request->cb_status);
        $validator = Validator::make($request->all(), [
            'txtLinkSlide' => '',
            'fileNameImg' => 'required',
            'cb_status' => '',
        ]);
        if ($validator->fails()) {
            return redirect()
                        ->route('slide.create')
                        ->withErrors($validator)
                        ->withInput();
        }
        $request->cb_status = ($request->cb_status==null) ? false : true ;
        $slide = new Slide;

        $slide->link = $request->txtLinkSlide;

        $slide->slide_image = $request->fileNameImg;

        $slide->status = $request->cb_status;
        $count=Slide::count();
        if ($count==0)
            $slide->order =1;
        else 
            $slide->order=$count+1;
        $slide->save();
        return redirect()->route('slide.index');
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
        $slide=Slide::find($id);
        return view('back-end.slide.edit',['slide'=>$slide]);
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
        $request->cb_status = ($request->cb_status==null) ? false : true ;
        $validator = Validator::make($request->all(), [
            // 'txtName' => 'required|min:1',
            // 'txtslide' => '',
            // 'fileSlideImg' => 'max:255',
        ]);
        if ($validator->fails()) {
            return redirect()
                        ->route('slide.edit',$id)
                        ->withErrors($validator)
                        ->withInput();
        }
        $slide = Slide::find($id);
        $slide->link = $request->txtLinkSlide;
        $slide->status = $request->cb_status;
        $slide->slide_image = $request->fileNameImg;
        $slide->save();
        return redirect()->route('slide.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Slide::find($id)!=null) {
            Slide::destroy($id);
            // deletebook
            return redirect()->route('slide.index');
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
        return Slide::orderBy('updated_at','desc')->get();
    }
}
