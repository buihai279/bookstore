<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class DashBoardController extends Controller
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
        return view('back-end.dashboard.index');
        //
    }

}
