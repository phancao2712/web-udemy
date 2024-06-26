<?php

namespace Modules\Orders\src\Repositories;

use App\Repositories\RepositoryInterface;

interface OrdersRepositoryInterface extends RepositoryInterface
{
    public function getOrdersByStudent($studentId,$filters = [], $limit = 0);
    public function getOrder($orderId);
}
