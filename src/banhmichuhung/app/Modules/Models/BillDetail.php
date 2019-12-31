<?php

namespace App\Modules\Models;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = "bill_detail";

    public function product() {
        return $this->belongTo('App\Modules\Models\Product', 'id_product', 'id');
    }

    public function bill() {
        return $this->belongTo('App\Modules\Models\Bill', 'id_bill', 'id');
    }
}
