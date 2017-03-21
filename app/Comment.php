<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table ='comments';

    public $timestamps = true;

    public static function getCommentByBookId($bookId=null)
    {
        return Comment::select('comments.id','rate','name','title','content','comments.updated_at')
        				->where('book_id',$bookId)
        				->leftJoin('users as u','u.id','=','comments.user_id')
        				->leftJoin('books as b','b.id','=','comments.book_id')
        				->orderBy('updated_at','desc')
        				->get(); 
    }
}
