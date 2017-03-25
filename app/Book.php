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
                ->select('b.id as bookId','b.book_name','b.price','b.cover_price','a.author_name','b.book_image','b.quality')
                ->join('categories as c', 'b.category_id','=','c.id')
                ->join('authors as a', 'b.author_id','=','a.id')
                ->orderBy('suggest', 'desc')
                ->orderBy('updated_at', 'desc')
                ->whereIn('c.id', $categories)
                ->paginate(12);
    }
    public static function getAllBookByAuthorId($authorId=1)
    {
        return  DB::select("SELECT b.id as bookId,
                                    count(comments.id) as 'totalComment',
                                    b.book_name,
                                    b.book_image,
                                    b.quality,
                                    b.price,
                                    a.author_name,
                                    a.id as authorId,
                                    c.company_name,
                                    c.id as companyId,
                                    b.cover_price
                            FROM books as b
                            LEFT OUTER JOIN comments  as comments
                            ON b.id=comments.book_id
                            LEFT OUTER JOIN authors  as a
                            ON a.id=b.author_id
                            LEFT OUTER JOIN companies  as c
                            ON c.id=b.company_id
                            WHERE b.author_id = $authorId
                            GROUP BY b.id,b.book_name,
                                    b.book_image,
                                    b.quality,
                                    b.price,
                                    a.author_name,
                                    a.id,
                                    c.company_name,
                                    c.id,
                                    b.cover_price
                        "
                    );
    }
    public static function getAllBookByCompanyId($companyId=1)
    {
        return  DB::select("SELECT b.id as bookId,
                                    count(comments.id) as 'totalComment',
                                    b.book_name,
                                    b.book_image,
                                    b.quality,
                                    b.price,
                                    a.author_name,
                                    a.id as authorId,
                                    b.cover_price
                            FROM books as b
                            LEFT OUTER JOIN comments  as comments
                            ON b.id=comments.book_id
                            LEFT OUTER JOIN authors  as a
                            ON a.id=b.author_id
                            LEFT OUTER JOIN companies  as c
                            ON b.company_id=c.id
                            WHERE b.company_id = $companyId
                            GROUP BY b.id,b.book_name,
                                    b.book_image,
                                    b.quality,
                                    b.price,
                                    a.author_name,
                                    a.id,
                                    b.cover_price
                        "
                    );
    }

    public static function getBookByBookId($bookID=0)
    {
        return  DB::selectOne("SELECT b.id as bookId,
                                    count(comments.id) as 'totalComment',
                                    avg(comments.rate) as 'avgComment',
                                    b.book_name,
                                    b.book_image,
                                    b.description,
                                    b.quality,
                                    b.category_id,
                                    b.price,
                                    b.cover_price,
                                    b.number_of_pages,
                                    b.translator,
                                    b.publish_date,
                                    b.publishing_house,
                                    b.images,
                                    a.id as authorId,
                                    a.author_name,
                                    com.company_image,
                                    com.company_name,
                                    com.id as companyId
                            FROM books as b
                            LEFT OUTER JOIN categories  as c
                            ON c.id = b.category_id
                            LEFT OUTER JOIN companies  as com
                            ON b.company_id=com.id
                            LEFT OUTER JOIN comments  as comments
                            ON b.id=comments.book_id
                            LEFT OUTER JOIN authors  as a
                            ON a.id=b.author_id
                            WHERE b.id = $bookID
                            GROUP BY b.id,b.book_name,
                                    b.book_image,
                                    b.description,
                                    b.quality,
                                    b.category_id,
                                    b.price,
                                    b.cover_price,
                                    b.number_of_pages,
                                    b.translator,
                                    b.publish_date,
                                    b.publishing_house,
                                    b.images,
                                    authorId,
                                    a.author_name,
                                    com.company_image,
                                    com.company_name,
                                    companyId

                        "
                    );
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
