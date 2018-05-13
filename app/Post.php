<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // les champs que l'on ne peut pas modifer
    protected $guarded = ['id','created_at'];

    public function user(){
    	return $this->belongsto('User');
    }

    public function comments(){
    	return $this->hasMany('Comment');
    }
}
