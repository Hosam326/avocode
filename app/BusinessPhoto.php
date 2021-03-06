<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessPhoto extends Model
{
    protected $table = 'business_photos';
    protected $fillable = ['image', 'work_id'];

    public function getImageLinkAttribute()
    {
        return $this->image ? url('/') . '/images/' . $this->image : url('/') . '';
    }
}
