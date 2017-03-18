<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Book extends Model
{
    protected $table ='books';

    public $timestamps = true;
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function author()
    {
        return $this->belongsTo('App\Author');
    }
    public static function getAllBookByCategoryId($categories=array())
    {
        $strCate=implode(',', $categories);
        return DB::select(" 
                            SELECT b.id,b.price,b.cover_price,b.book_name,b.description,a.author_name,b.book_image,b.quality
                            FROM books as b
                            LEFT OUTER JOIN categories  as c
                            ON b.category_id=c.id
                            LEFT OUTER JOIN authors  as a
                            ON b.author_id=a.id
                            WHERE c.id IN ($strCate)
                        ");

    }
}
