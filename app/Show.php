<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    //
    protected $fillable = ['movie_id','date_start', 'date_end', 'site', 'address', 'capacity'];
    protected $table  = "show";

    public function movie(){
        return $this->belongsTo('App\Movie');
    }
    
    public function users(){
        return $this->belongsToMany('App\User', 'ticket');
    }

}
