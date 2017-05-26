<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use Storage;

use App\Slide;

class SlideController extends Controller
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
        $validator = Validator::make($request->all(), [
                    'txtLinkSlide'  => '',
                    'txtImageSlide' => 'required',
                    'cb_status'     => '',
        ]);
        if ($validator->fails()) {
            return redirect()
                        ->route('slide.create')
                        ->withErrors($validator)
                        ->withInput();
        }
        $request->cb_status = ($request->cb_status=='on') ? 1 : 0 ;

        $slide = new Slide;

        $slide->link = $request->txtLinkSlide;

        $slide->slide_image = $request->txtImageSlide;

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
        $request->cb_status = ($request->cb_status=='on') ? 1 : 0 ;

        $validator = Validator::make($request->all(), [
            'txtImageSlide' => 'max:255|min:4',
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

        $slide->slide_image = $request->txtImageSlide;

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
        return Slide::orderBy('order')->get();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function order(Request $request)
    {
        foreach ($request->order as $key => $value) {

            $slide = Slide::find($value);

            $slide->order = $key+1;

            $slide->save();
        }
        return redirect()->route('slide.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function uploadSlideImage(Request $request){
        $file = $request->file('file');

        if(!empty($file)):

            $info=pathinfo($file->getClientOriginalName());

            $name='slide-image/'.$info['filename'].time().'.'.$info['extension'];

            Storage::put($name, file_get_contents($file));

            $url = Storage::url('app/'.$name);

        endif;
        return \Response::json(array('success' => true,'file'=>$url));
    }
}
