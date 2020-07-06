<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    public function getImageLinkAttribute()
    {
        return $this->image ? url('/') . '/images/' . $this->image : url('/') . '';
    }
}
