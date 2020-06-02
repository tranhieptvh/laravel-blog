<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestMiddlewareController extends Controller
{
    function printToken(Request $request){
        if($request->has('token')){
            echo "Token: ".$request->get('token');
        }
    }
}
