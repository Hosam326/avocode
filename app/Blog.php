<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
//    protected $appends =['image_link'];

    public function getImageLinkAttribute()
    {
        return $this->image ? url('/') . '/images/' . $this->image : url('/') . '';
    }
}
