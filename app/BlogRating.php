<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogRating extends Model
{
    protected $fillable = [

        'blog_id', 'rate', 'message'
    ];
}
