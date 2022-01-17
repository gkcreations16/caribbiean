<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function massages()
    {
        return $this->hasMany('App\Massage');
    }
}
