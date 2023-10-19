<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sections extends Model
{
    // مصفوفة لكي تسمح للمتغيرات بان تدخل قاعده البيانات
    protected $fillable = [
        'section_name',
        'description',
        'Created_by'
    ];

}
