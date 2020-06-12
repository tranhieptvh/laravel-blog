<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';

    function getStudent($id,$name,$class){
        $students = Students::where('id',$id)->orWhere('name',$name)->orWhere('class',$class)
        ->orderBy('id','DESC')->get();
        return $students->toArray();
    }
}
