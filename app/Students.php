<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';

    function getStudent($id,$name,$class){

        $students = Students::query();

        if(isset($id)) {
            $students->where('id', $id);
        }
        if(isset($name)) {
            $students->where('name','LIKE', "%$name%");
        }
        if(isset($class)) {
            $students->where('class',$class);
        }

        $result = $students->orderBy('id','DESC')->get();
        return $result->toArray();
    }
}
