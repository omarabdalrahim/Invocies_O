<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    // protected $fillable=[
    //     'Product_name',
    //     'description',
    //     'section_id',
    // ];
   //           or
    protected $guarded =[];

    // دالة خاصة لعرض البيانات الخاصة بالعلاقات

        public function section()
        {
            return $this->belongsTo('App\sections');
        }

}
