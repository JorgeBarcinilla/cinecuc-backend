<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table  = "movie";

    public function show(){
        return $this->hasMany('App\Show');
    }
    
}
