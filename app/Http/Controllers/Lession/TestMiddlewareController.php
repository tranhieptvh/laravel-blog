<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestMiddlewareController extends Controller
{
    function printToken()
    {
        echo "Hello Middleware";
    }

    function check()
    {
        return response()->json(['status' =>'ok']);
    }
}
