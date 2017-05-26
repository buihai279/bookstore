<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use Storage;

use App\Company;

use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
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
        return view('back-end.company.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.company.create');
        
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
                        'txtNameCompany' => 'required|min:1',
                        'txtCompanyInfo' => '',
                        'txtCompanyLogo' => 'max:255',
        ]);
        if ($validator->fails()) {
            return redirect()
                        ->route('company.create')
                        ->withErrors($validator)
                        ->withInput();
        }
        $company = new Company;

        $company->company_name = $request->txtNameCompany;

        $company->company_info = $request->txtcompanyInfo;

        $company->company_image = $request->txtCompanyLogo;

        $company->save();
        return redirect()->route('company.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = Company::find($id)->books;

        $company=Company::find($id);

        return view('back-end.company.edit',
            [
                'company'   =>$company,
                'books'     =>$books
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
            'txtNameCompany' => 'required|min:1',
            'txtCompanyInfo' => '',
            'txtCompanyLogo' => 'max:255',
        ]);
        if ($validator->fails()) {
            return redirect()
                        ->route('company.edit',$id)
                        ->withErrors($validator)
                        ->withInput();
        }
        $company = Company::find($id);

        $company->company_name = $request->txtNameCompany;

        $company->company_info = $request->txtCompanyInfo;

        $company->company_image = $request->txtCompanyLogo;

        $company->save();
        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Company::find($id)!=null) {

            Company::destroy($id);

            return redirect()->route('company.index');
        }
    }

    public function getlist()
    {
        return Company::getAllCompany();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function getlistCompany()
    {
        return Company::select('id','company_name','company_image')
                        ->distinct()
                        ->orderBy('company_name')
                        ->get();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function uploadCompanyLogo(Request $request){
        $file = $request->file('file');

        if(!empty($file)):

            $info=pathinfo($file->getClientOriginalName());

            $name='company-image/'.$info['filename'].time().'.'.$info['extension'];

            Storage::put($name, file_get_contents($file));

            $url = Storage::url('app/'.$name);
        endif;
        
        return \Response::json(array('success' => true,'file'=>$url));
    }

}
