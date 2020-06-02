<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function hello()
    {
        return view('hello');
    }

    function index($category, $post_id)
    {
        echo "Category: " . $category . "<br>Post ID: " . $post_id;
    }
}
