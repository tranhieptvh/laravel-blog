<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phones extends Model
{
    protected $table = 'phones';

    public function userDetail(){
        return $this->belongsTo('App\User_detail');
    }
}
