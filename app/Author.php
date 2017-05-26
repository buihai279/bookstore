<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;


class Author extends Model
{
    protected $table ='authors';

    public $timestamps = false;
    

    /**
     *
     *  relationship 1-n (1 Author - n Book)
     *  
     *
     *
     */
    

    public function books()
    {
        return $this->hasMany('App\Book');
    }

    /**
     *
     *  Get top Authors
     *  Return Array json
     *
     */
    
    public static function getTopAuthor()
    {
        return DB::select(" 
                            SELECT a.id,a.author_name,a.author_info,a.author_image,  
                                    count(b.author_id) as total 
                            FROM authors as a
                            LEFT OUTER JOIN books  as b
                            ON a.id = b.author_id
                            GROUP BY a.id,a.author_name,a.author_info,a.author_image
                            ORDER BY total DESC
                        ");

    }


    /**
     *
     *  Get top Authors in category
     *  Return Array json
     *
     */
    public static function getTopAuthorInCategories($categories=array())
    {
    	$strCate=implode(',', $categories);
        return DB::select(" 
        					SELECT a.id,a.author_name,count(b.author_id) as total 
                            FROM books as b
                            LEFT OUTER JOIN authors  as a
                            ON a.id = b.author_id
                            LEFT OUTER JOIN categories  as c
                            ON b.category_id=c.id
                            WHERE c.id IN ($strCate)
                            GROUP BY a.id,a.author_name,a.author_info,a.author_image
                            ORDER BY total DESC
                        ");
    }

    /**
     *
     *  Get top all author
     *  Return Array json
     *
     */
    public static function getlistAuthor()
    {
        return Author::select('id','author_name','author_image')
                        ->distinct()
                        ->orderBy('author_name')
                        ->get();
    }


    /**
     *
     *  Get all Authors order by total book
     *  Return Array json
     *
     */
    public static function getAllAuthor()
    {
        return  DB::select("SELECT a.id as authorId,
                                    count(b.id) as 'totalBook',
                                    a.author_name,
                                    a.author_image
                            FROM authors as a
                            LEFT OUTER JOIN books  as b
                            ON b.author_id=a.id
                            GROUP BY    a.id,
                                        a.author_name,
                                        a.author_image
                            ORDER BY totalBook DESC
                        "
                    );
    }

}
