<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function login(Request $request)
    {
        $data = $request->toArray();
        // var_dump($data);
        if (
            isset($data['username']) && $data['username'] === 'tvh' &&
            isset($data['pwd']) && $data['pwd'] === '123'
        ) {
            return redirect('');
        } else {
            return redirect('login');
        }
    }
}
