<?php

namespace Modules\Orders\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Orders\src\Models\OrdersStatus;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Chờ thanh toán',
                'color' => 'warning',
                'is_success' => '0',
            ],
            [
                'name' => 'Đã thanh toán',
                'color' => 'success',
                'is_success' => '1',
            ],
            [
                'name' => 'Thanh toán thất bại',
                'color' => 'danger',
                'is_success' => '0',
            ],
            [
                'name' => 'Đã hủy',
                'color' => 'danger',
                'is_success' => '0',
            ],
        ];

        foreach ($data as $item) {
           $ordersStatus = new OrdersStatus();
           $ordersStatus->name = $item['name'];
           $ordersStatus->color = $item['color'];
           $ordersStatus->is_success = $item['is_success'];
           $ordersStatus->save();
        }
    }
}
