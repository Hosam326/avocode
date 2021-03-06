<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    public function service()
    {
        return $this->belongsTo('App\service');
    }

    public function getImageLinkAttribute()
    {
        return $this->image ? url('/') . '/images/' . $this->image : url('/') . '';
    }
}
