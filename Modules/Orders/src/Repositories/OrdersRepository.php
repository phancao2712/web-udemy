<?php

namespace Modules\Orders\src\Repositories;

use App\Repositories\BaseRepository;
use Modules\Orders\src\Models\Orders;
use Modules\Orders\src\Repositories\OrdersRepositoryInterface;

class OrdersRepository extends BaseRepository implements OrdersRepositoryInterface
{
    public function getModel()
    {
        return Orders::class;
    }

    public function getOrdersByStudent($studentId, $filters = [], $limit = 0)
    {
        $query = $this->model->where("student_id", $studentId)->latest();
        @[
            'status_id' => $statusId,
            'total' => $total,
            'start_date' => $startDate,
            'end_date' => $endDate,
        ] = $filters;

        if ($statusId) {
            $query->where('status_id', $statusId);
        }
        if ($total && $total > 0) {
            $query->where('orders.total', '>=', $total);
        }
        if ($startDate) {
            $query->where('created_at', '>=', \Carbon\Carbon::parse($startDate)->format('Y-m-d H:i:s'));
        }
        if ($endDate) {
            $query->where('created_at', '<=', \Carbon\Carbon::parse($endDate)->format('Y-m-d H:i:s'));
        }
        return $query->paginate($limit)->withQueryString();
    }

    public function getOrder($orderId){
        return $this->model->with('detail')->find($orderId);
    }
}
