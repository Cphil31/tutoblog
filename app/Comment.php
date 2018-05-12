<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // les champs que l'on ne peut pas modifer
    protected $guarded = ['id','created_at'];
}
