<?php

namespace App\Modules\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    public function product_type()
    {
        return $this->belongsTo('App\Modules\Models\ProductType', 'id_type', 'id');
    }

    public function bill_detail() {
        return $this->hasMany('App\Modules\Models\BillDetail', 'id_product', 'id');
    }
}
