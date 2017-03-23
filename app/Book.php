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
        return  DB::table('books as b')
                ->select('b.id','b.book_name','b.price','b.cover_price','a.author_name','b.book_image','b.quality')
                ->join('categories as c', 'b.category_id','=','c.id')
                ->join('authors as a', 'b.author_id','=','a.id')
                ->whereIn('c.id', $categories)
                ->paginate(10);
    }
    public static function getBookByBookId($bookID=0)
    {
        return  Book::where('books.id','=',$bookID)
                    ->select('books.id as bookId',
                            'books.book_name',
                            'books.book_image',
                            'books.description',
                            'books.quality',
                            'books.category_id',
                            'books.price',
                            'books.cover_price',
                            'books.number_of_pages',
                            'books.translator',
                            'books.publish_date',
                            'books.publishing_house',
                            'books.images',
                            'a.id as authorId',
                            'a.author_name',
                            'com.company_image',
                            'com.company_name',
                            'com.id as companyId'
                    )
                ->leftJoin('categories as c', 'books.category_id','=','c.id')
                ->leftJoin('authors as a', 'books.author_id','=','a.id')
                ->leftJoin('companies as com', 'books.company_id','=','com.id')
                ->get()->first();
    }
    public static function getBookInCart($bookID=0)
    {
        return  Book::where('books.id','=',$bookID)
                    ->select('books.id as bookId',
                            'books.book_image',
                            'books.quality',
                            'books.cover_price',
                            'com.company_name',
                            'com.id as companyId'
                    )
                ->leftJoin('companies as com', 'books.company_id','=','com.id')
                ->get()->first();
    }
}
