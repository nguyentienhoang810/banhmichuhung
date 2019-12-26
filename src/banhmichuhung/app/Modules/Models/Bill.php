<?php

namespace App\Modules\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";

    public function bill_detail() {
        return $this->hasMany('App\Modules\Models\BillDetail', 'id_bill', 'id');
    }

    public function customer() {
        return $this->belongTo('App\Modules\Models\Customer', 'id_customer', 'id');
    }

    public function user() {
        return $this->belongTo('App\Modules\Models\User', 'user_id', 'id');
    }
}
