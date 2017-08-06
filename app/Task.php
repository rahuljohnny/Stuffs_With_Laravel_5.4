<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /*
    public static function incomplete()
    {
    	return static::where('complete',0)->get(); //CNU static
    }
    */


    public static function ScopeIncomplete($que)
    {
    	return $que->where('complete',0); //CNU static
    }
}
