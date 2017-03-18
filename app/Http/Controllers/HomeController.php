<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Author;

use App\Company;

use App\Book;

use App\http\Controllers\CategoryController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::getCategoriesByParentID(0);
        $categoryAll=Category::get();
        // $capanyAll=Company::get();
        foreach ($categories as $value) {
            $categoriesChild[$value->id]=Category::getCategoriesByParentID($value->id);
            $listCate=CategoryController::getAllCategories($categoryAll,$value->id);
            $authorsChild[$value->id]=Author::getTopAuthorInCategories($listCate);
            $companyChild[$value->id]=Company::getTopCompanyInCategories($listCate);
            $booksChild[$value->id]=Book::getAllBookByCategoryId($listCate);
        }
        // dd($booksChild);
        return view('front-end.home',[
                        'categories'        =>$categories,
                        'categoriesChild'   =>$categoriesChild,
                        'companyChild'      =>$companyChild,
                        'booksChild'         =>$booksChild,
                        'authorsChild'      =>$authorsChild
                    ]);
    }
}
