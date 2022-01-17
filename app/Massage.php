<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Massage extends Model
{
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    public function user()
    {
        return $this->hasMany('App\User');
    }
}
