<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function subService()
    {

        return $this->hasMany('App\subService');

    }
}
