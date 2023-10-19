<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class invoices extends Model
{
    use SoftDeletes;

    // protected $fillable = [
    //          'invoice_number',
    //         'invoice_Date',
    //         'Due_date' ,
    //         'product',
    //         'section_id',
    //         'Amount_collection' ,
    //         'Amount_Commission' ,
    //         'Discount',
    //         'Value_vat',
    //         'Rate_vat',
    //         'total',
    //         'Status',
    //         'Value_status',
    //         'note',
    //         'payment_date',
    // ];
    protected $guarded =[];


    public function Section()
    {
        return $this->belongsTo('App\sections');
    }

}
