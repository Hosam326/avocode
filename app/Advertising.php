<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertising extends Model
{
    protected $appends =['image_link'];

    public function getImageLinkAttribute()
    {
        return $this->image ? url('/') . '/images/' . $this->image : url('/') . '';
    }

    public function getPageNameAttribute()
    {
        $arr = [1 => 'الصفحة الرئيسية',2 => 'مجموعة افوكود',3 => 'من نحن',];
        return $arr[$this->page_id] ;
    }
}
