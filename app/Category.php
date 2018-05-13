<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // les champs que l'on ne peut pas modifer
    protected $guarded = ['id','created_at'];
   // Une catégorie peu avoir plusieurs posts 
    public function posts(){

    	return $this->hasMany('Post');
    }

  }
