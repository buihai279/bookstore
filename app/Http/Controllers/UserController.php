<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\User;

use Auth;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        return view('back-end.users.show');
    }

    public function getList()
    {
        return User::get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::find($id);

        if ($user==null) 
            return 'Không tìm thấy người dùng';
        else
            return view('back-end.users.edit', ['user' => $user]);
        
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

        if (
            ($request->rdo_level==0
                ||$request->rdo_level==1
                ||is_bool($request->rdo_block)
            )
            &&$request->id==$id
            &&$request->btn_update=='update'
        ){
            if($request->rdo_block==null) 
                $request->rdo_block=0;

            $user = User::find($id);

            if ($user->deleted) 
                return 'Tài khoản đã bị xóa trước đó';
            
            $user->level = $request->rdo_level;

            $user->block = $request->rdo_block;

            $user->save();
            return redirect()->back();
        }
        elseif ($request->btn_delete=='delete') {
            return $this->destroy($id);
        }
        else{
            return 'Có lỗi xảy ra';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->deleted = 1;

        $user->save();

        return redirect()->route('indexUser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changePassword()
    {
        return view('auth.change');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function submitPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password'      => 'required|min:6',
            'newPassword'   => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()
                    ->route('changePassword')
                    ->withErrors($validator)
                    ->withInput();
        }

        $id=Auth::id();

        if (Hash::check($request->password,Auth::user()->password)) {

            $request->user()
                    ->fill(['password' => Hash::make($request->newPassword)])
                    ->save();

            return redirect()->route('homepage');
        }else 
            echo "sai mật khẩu";
    }
}
