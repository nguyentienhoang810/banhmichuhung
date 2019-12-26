<?php

namespace App\Modules\Models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = "type_products";

    public function product() {
        return $this->hasMany('App\Modules\Models\Product', 'id_type', 'id');
    }
}
