<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'user_id'=>'2',
            'product_id'=>'1',
        ]);
        Order::create([
            'user_id'=>'2',
            'product_id'=>'2',
        ]);
        Order::create([
            'user_id'=>'3',
            'product_id'=>'1',
        ]);
    }
}
