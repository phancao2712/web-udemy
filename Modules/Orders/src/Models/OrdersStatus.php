<?php

namespace Modules\Orders\src\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersStatus extends Model
{
    use HasFactory;
    protected $table = 'orders_status';
    public function Orders(){
        return $this->hasMany(Orders::class,'status_id', 'id');
    }
}
