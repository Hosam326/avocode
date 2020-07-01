<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'slider_tags', 'slider_id', 'tag_id');
    }

    public function getImageLinkAttribute()
    {
        return $this->image ? url('/') . '/images/' . $this->image : url('/') . '';
    }
}
