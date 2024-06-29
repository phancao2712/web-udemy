<?php

namespace Modules\Orders\src\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    public function status(){
        return $this->belongsTo(OrdersStatus::class);
    }

    public function detail(){
        return $this->hasMany(OrdersDetail::class, 'order_id', 'id');
    }
}
