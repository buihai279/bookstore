<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Company extends Model
{
    protected $table ='companies';

    public $timestamps = false;
    
    public function books()
    {
        return $this->hasMany('App\Book');
    }
    public static function getTopCompanyInCategories($categories=array())
    {
    	// return $companies;
    	$strCate=implode(',', $categories);
        return DB::select(" 
        					SELECT com.id,com.company_name,count(b.id) as total 
                            FROM books as b
                            LEFT OUTER JOIN categories  as c
                            ON c.id = b.category_id
                            LEFT OUTER JOIN companies  as com
                            ON b.company_id=com.id
                            WHERE c.id IN ($strCate)
                            GROUP BY com.id,com.company_name
                            ORDER BY total DESC
                        ");

    }
}
