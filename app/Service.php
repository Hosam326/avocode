<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function subService()
    {
        return $this->hasMany('App\subService');
    }
    public function getImageLinkAttribute()
    {
        return $this->image ? url('/') . '/images/' . $this->image : url('/') . '';
    }

    public function business()
    {
        return $this->hasMany('App\business', 'type');
    }
}
