<?php

namespace App\Http\Controllers\ORM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Students;

class StudentController extends Controller
{
    function showStudent(Request $request){
        $data = $request->toArray();
        $id = $data['id'];
        $name = $data['name'];
        $class = $data['class'];

        $students = new Students;
        $result = $students->getStudent($id, $name, $class);
        // var_dump($result);

        return view('ORM\search-student')->with([
            'result' => $result
        ]);
    }
}
