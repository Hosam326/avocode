<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public function getImageLinkAttribute()
    {
        return $this->icon ? url('/') . '/images/' . $this->icon : url('/') . '';
    }
}
