<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=>'Iphone 15',
            'count'=>6,
        ]);
        Product::create([
            'name'=>'Samsumg S23',
            'count'=>4,
        ]);
        Product::create([
            'name'=>'sunblock',
            'count'=>3,
        ]);
        Product::create([
            'name'=>'baby powder',
            'count'=>3,
        ]);
    }
}
