<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Company;

class CompanyController extends Controller
{
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
            'fileCompanyImg' => 'max:255',
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

        $company->company_image = null;
        $company->save();
        return redirect()->route('company.index');
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
        $company=Company::find($id);
        return view('back-end.company.edit',['company'=>$company]);
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
            'fileCompanyImg' => 'max:255',
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

        $company->company_image = null;
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
            // Author::where('parent_id', $id)->delete();
            Company::destroy($id);
            // deletebook
            return redirect()->route('company.index');
        }
    }

    public function getlist()
    {
        return Company::orderBy('company_name')->get();
    }
}
