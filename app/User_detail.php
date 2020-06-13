<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class User_detail extends Model
{
    protected $table = 'user_detail';

    public function phones(){
        return $this->hasOne('App\Phones');
    }

    public function roles(){
        return $this->belongsToMany('App\Roles','role_user','user_detail_id', 'role_id');
    }

    function getUser($user_id,$phone_number,$role_name){

        $users = User_detail::query();

        if(isset($user_id)){
            $users->where('id', $user_id);
        }
        if(isset($phone_number)){
            $users->whereHas('phones',function(Builder $query) use ($phone_number) {
                $query->where('number',$phone_number);
            });
        }
        if(isset($role_name)){
            $users->whereHas('roles',function(Builder $query) use ($role_name) {
                $query->where('name',$role_name);
            });
        }

        $result = $users->get();
        return $result;
    }
}
