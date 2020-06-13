<?php

namespace App\Http\Controllers\ORM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User_detail;

class UserDetailController extends Controller
{
    function showUser(Request $request){
        $data = $request->toArray();
        $user_id = $data['user_id'];
        $phone_number = $data['phone_number'];
        $role_name = $data['role_name'];

        $users = new User_detail;
        $result = $users->getUser($user_id,$phone_number,$role_name);
        // var_dump($result);

        return view('ORM\search-user')->with([
            'result' => $result
        ]);
    }
}
