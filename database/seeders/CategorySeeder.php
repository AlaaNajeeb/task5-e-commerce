<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=>'Elecronics',
        ]);
        Category::create([
            'name'=>'skin care',
        ]);
        Category::create([
            'name'=>'baby care',
        ]);
        Category::create([
            'name'=>'clothes',
        ]);
    }
}
