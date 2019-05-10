<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $guarded = [];

    public function posts(){

        return $this->hasMany('App\Blog');
    }
}
