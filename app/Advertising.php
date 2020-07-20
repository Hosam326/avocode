<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertising extends Model
{
    protected $appends = ['image_link'];

    public function getImageLinkAttribute()
    {
        return $this->image ? url('/') . '/images/' . $this->image : url('/') . '';
    }

    public function getPageNameAttribute()
    {
        $arr = [1 => 'الصفحة الرئيسية', 2 => 'مجموعة افوكود', 3 => 'من نحن', 4 => 'اعمالنا', 5 => 'التوظيف', 6 => 'فريق العمل'
            , 7 => 'اتصل بنا', 8 => 'الخدمات', 9 => 'الخدمات الفرعية', 10 => 'العمل', 11 => 'المدونة'];
        return $arr[$this->page_id];
    }
}
