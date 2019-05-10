<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Blog extends Model
{


    protected $guarded = [];

    public function author(){

        return $this->belongsTo('App\User');
    }
    public function tags(){

        return $this->belongsToMany('App\Tag');
    }



    public function cat(){

        return $this->belongsTo('App\Cat');
    }
}
