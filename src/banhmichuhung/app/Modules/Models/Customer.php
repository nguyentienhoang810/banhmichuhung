<?php

namespace App\Modules\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";

    public function bill() {
        return $this->hasMany('App\Modules\Models\Bill', 'id_customer', 'id');
    }
}