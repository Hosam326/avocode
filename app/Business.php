<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    public function getImageLinkAttribute()
    {
        return $this->image ? url('/') . '/images/' . $this->image : url('/') . '';
    }
    public function service()
    {
        return $this->belongsTo('App\service', 'type');
    }

    public function businessImages()
    {
        return $this->hasMany(BusinessPhoto::class, 'work_id');
    }
}
