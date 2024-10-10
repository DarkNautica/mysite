<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    public function run()
    {
        // Create 50 sample orders
        Order::factory()->count(50)->create();
    }
}
