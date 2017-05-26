<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use Validator;

class CategoryController extends Controller
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
        $listCategory=$this->show();//lấy tất cả danh mục sách
        $selectCategory=$this->getSelect(0);//lấy tất cả option danh mục sách
        return view('back-end.categories.index', [
                                    'listCategories' => $listCategory,
                                    'selectCategory'=>$selectCategory
                                ]);
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
                        'txtNameCategory'   => 'required|min:6',
                        'parent_id'         => 'required|min:0|numeric',
        ]);

        if ($validator->fails()) {

            return redirect()
                        ->route('category.index')
                        ->withErrors($validator)
                        ->withInput();
        }

        if(($request->parent_id>0&&Category::find($request->parent_id)!=null)||$request->parent_id==0){

            $category = new Category;

            $category->category_name    = $request->txtNameCategory;

            $category->parent_id        = $request->parent_id;

            if (Category::where('parent_id', $request->parent_id)->count()==0)
                $category->order =1;
            else 
                $category->order=Category::where('parent_id', $request->parent_id)
                                        ->max('order')+1;

            $category->save();

            return redirect()->back();
        }else
            return 'Có lỗi xảy ra';

    }

    /**
     * Display the specified resource.
     *
     * @param  
     * @return \Illuminate\Http\Response
     */
    public static function listCategories()
    {
       return $categories= Category::orderBy('parent_id', 'asc')
                                   ->orderBy('order', 'asc')
                                   ->select('id','category_name', 'parent_id')
                                   ->get();
    }
    /**
     * Display the specified resource.
     *
     * @param  
     * @return \Illuminate\Http\Response
     */
    public static function show()
    {
        return CategoryController::showCategories(CategoryController::listCategories());
    }

    public static function getSelect($id)
    {
        return CategoryController::selectCategories($id,CategoryController::listCategories());
    }


    //  HÀM ĐỆ QUY HIỂN THỊ CATEGORIES dang bang
    public static function showCategories($categories, $parent_id = 0, $char = '|----',$tableStr='')
    {
        foreach ($categories as $key => $item)
        {
            // Nếu là chuyên mục con thì hiển thị
            if ($item->parent_id == $parent_id)
            {
                if ($parent_id==0)
                    $tableStr.= '<tr style="color:red;font-weight:bold">';
                else
                    $tableStr.= '<tr>';
                        $tableStr.= '<td>';
                            $tableStr.= $char . $item->category_name;
                        $tableStr.= '</td>';
                        $tableStr.= "<td><a href='".route('category.edit',$item->id)."'style='width: 35px;padding:0' class='waves-effect waves-light btn'><i class='material-icons'>edit</i></a><td>";
                    $tableStr.= '</tr>';
                 
                // Xóa chuyên mục đã lặp
                unset($categories[$key]);
                 // echo $item->id;
                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                $tableStr=CategoryController::showCategories($categories, $item->id, $char.'|------',$tableStr);
            }
        }

        return $tableStr;
    }

    //  HÀM ĐỆ QUY HIỂN THỊ CATEGORIES
    public static function selectCategories($id,$categories, $parent_id = 0, $char = '|----',$tableStr='')
    {
        $selectId=0;

        foreach ($categories as $value) {

            if ($value->id==$id)
                $selectId=$value->parent_id;

        }
        foreach ($categories as $key => $item)
        {
            
            // Nếu là chuyên mục con thì hiển thị
            if ($item->parent_id == $parent_id)
            {

                if ($item->id==$selectId)
                    $tableStr.= "<option value='$item->id' selected>";
                else
                    $tableStr.= "<option value='$item->id'>";


                            $tableStr.= $char . $item->category_name;

                    $tableStr.= '</option>';
                 
                // Xóa chuyên mục đã lặp
                unset($categories[$key]);
                 // echo $item->id;
                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                $tableStr=CategoryController::selectCategories($id,$categories, $item->id, $char.'|------',$tableStr);
            }
        }

        return $tableStr;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = Category::find($id)->books;
        $listOrder=[];
        $tmp=Category::where('parent_id', $id)->count();

        if ($tmp>0) {

            $listOrder= Category::where('parent_id', $id)
                                ->orderBy('parent_id', 'asc')
                                ->orderBy('order', 'asc')
                                ->select('id','category_name', 'parent_id')
                                ->get();

        }
        $category= Category::find($id);

        if ($category==null) {

            return 'Không tìm thấy danh mục';

        }else{
            $listOption=$this->getSelect($id);
            return view('back-end.categories.option', 
                    [
                        'category'  => $category,
                        'listOption'=> $listOption,
                        'listOrder' =>$listOrder,
                        'books'     =>$books
                    ]);
        }
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

        $parent_id=$request->parent_id;
        $txtNameCategory=$request->txtNameCategory;
        $tmp=Category::where('parent_id', $id)->get();

        foreach ($tmp as $key => $value) {

            if($value->id==$parent_id)
                return 'Có lỗi xảy ra';

        }

        if( 
            $parent_id!=$id
            &&$request->btn_edit=='edit'
            &&(($parent_id>0&&Category::find($parent_id)!=null)
            ||$parent_id==0)
        ){

            $category = Category::find($id);

            $category->category_name = $txtNameCategory;

            if($category->parent_id != $parent_id){

                if (Category::where('parent_id', $parent_id)->count()==0)
                    $category->order =1;
                else 
                    $category->order=Category::where('parent_id', $parent_id)->max('order')+1;

                $category->parent_id = $parent_id;

            }
            $category->save();

            return redirect()->route('category.index');
        }else
            return 'Có lỗi xảy ra';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Category::find($id)!=null) {

            Category::where('parent_id', $id)->delete();

            Category::destroy($id);

            return redirect()->route('category.index');

        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function order(Request $request)
    {
        if(count($request->order)){

            foreach ($request->order as $key => $value) {

                $t=$key+1;
                $category = Category::find($value)
                                    ->update(['order' => $t]);
                
            }

            return redirect()->route('category.index');
        }
        echo "Có lỗi xảy ra";
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getlist()
    {
        return Category::get();
        
    }


    /**
     * Recursion get all id Categories 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function getAllIdCategories($categories, $parent_id = 0,$arr=array())
    {
        foreach ($categories as $key => $item)
        {
            if ($parent_id!=0) {
                array_push($arr, $parent_id);
            }
            if ($item['parent_id'] == $parent_id)
            {
                array_push($arr,$item['id']);
                unset($categories[$key]);
                CategoryController::getAllIdCategories($categories, $item['id'], $arr);

            }
        }

        return array_unique($arr);
    }


     public static function getAllCategoriesId($categoryId=0)//lấy toàn bộ id của danh mục con và của chính nó
    {
        $arr=array();

        $result=Category::select('id','parent_id')
                        ->find($categoryId);

        $categoriesId=  Category::select('id')
                                ->where('parent_id','=',$result->id)
                                ->get();

        foreach ($categoriesId as  $categoryId)
            $arr[]=$categoryId->id;

        array_push($arr,$result->id);
        return $arr;
    }

}
