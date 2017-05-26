<?php

namespace App\Http\Controllers;

use App\Category;

use App\Author;

use App\Company;

class BaseClass extends Controller
{
    static public $categories      =array();
    static public $categoriesChild =array();
    static public $authorsChild    =array();
    static public $companyChild    =array();
    static public $categoryAll     =array();

    public function __construct()
    {
        BaseClass::$categories=Category::getCategoriesByParentID(0);//lấy danh mục theo parent id truyền vào
        
        BaseClass::$categoryAll=Category::getAll();//lấy toàn bộ danh mục
        
        foreach (BaseClass::$categories as $value) {

            BaseClass::$categoriesChild[$value->id]=Category::getCategoriesByParentID($value->id);

            $listCate=CategoryController::getAllIdCategories(BaseClass::$categoryAll,$value->id);

            BaseClass::$authorsChild[$value->id]=Author::getTopAuthorInCategories($listCate);

            BaseClass::$companyChild[$value->id]=Company::getTopCompanyInCategories($listCate);
        }
    }

    public static function handlingView($viewLayout='front-end.home',$arrayValue=array())
    {
        $arrayDefault=[
                        'categories'        =>BaseClass::$categories,
                        'categoriesChild'   =>BaseClass::$categoriesChild,
                        'companyChild'      =>BaseClass::$companyChild,
                        'authorsChild'      =>BaseClass::$authorsChild
                    ];  
        return view($viewLayout,array_merge($arrayDefault,$arrayValue));
    }


}
new BaseClass();
