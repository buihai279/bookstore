<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name', 'parent_id', 'order'
    ];
    protected $table ='categories';
    protected $guarded =[];

    public $timestamps = false;
    
    /**
     *
     *  relationship 1-n (1 Category - n Book)
     *  
     *  
     *
     */
    public function books()
    {
        return $this->hasMany('App\Book');
    }
    public static function getCategoriesByParentID($parentID=0)
    {
        return Category::select('id','category_name')
                        ->orderBy('order')
                        ->where('parent_id', $parentID)
                        ->get();
    }
    public static function getAll()
    {
        return Category::get();
    }
}
