<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    function showInfo(Request $request)
    {
        $data = $request->all();
        echo "Name: " . $data['name'] . "<br>";
        echo "Age: " . $data['age'] . "<br>";
        echo "Location: " . $data['location'] . "<br>";
    }
}
