<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // les champs que l'on ne peut pas modifer
    protected $guarded = ['id','created_at'];
}
