<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    public function getGenderAttribute()
    {
        $arr = [1 => 'الصفحة الرئيسية',2 => 'مجموعة افوكود',3 => 'من نحن',];
        return $arr[$this->page_id] ;
    }
}
