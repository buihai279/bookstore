<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table ='slides';

    public $timestamps = true;

    
    public static function getSlidesIndex()
    {
    	return Slide::where('status','=',1)->orderBy('order')->get();
    }
}
