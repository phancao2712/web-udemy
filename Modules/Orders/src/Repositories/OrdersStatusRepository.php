<?php

namespace Modules\Orders\src\Repositories;

use App\Repositories\BaseRepository;
use Modules\Orders\src\Models\OrdersStatus;
use Modules\Orders\src\Repositories\OrdersStatusRepositoryInterface;


class OrdersStatusRepository extends BaseRepository implements OrdersStatusRepositoryInterface
{
    public function getModel()
    {
        return OrdersStatus::class;
    }

    public function getOrderStatus(){
        return $this->model->orderBy('name', 'asc')->get();
    }
}
