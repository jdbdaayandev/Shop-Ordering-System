<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['category_name' => 'Electronics'],
            ['category_name' => 'Clothing'],
            ['category_name' => 'Shoes'],
            ['category_name' => 'Beauty & Personal Care'],
            ['category_name' => 'Home & Living'],
            ['category_name' => 'Kitchen & Dining'],
            ['category_name' => 'Sports & Outdoors'],
            ['category_name' => 'Toys & Games'],
            ['category_name' => 'Books & Stationery'],
            ['category_name' => 'Groceries'],
            ['category_name' => 'Health & Wellness'],
            ['category_name' => 'Automotive'],
            ['category_name' => 'Pet Supplies'],
            ['category_name' => 'Baby & Kids'],
            ['category_name' => 'Jewelry & Accessories'],
            ['category_name' => 'Tools & Hardware'],
            ['category_name' => 'Office Supplies'],
            ['category_name' => 'Garden & Outdoor'],
            ['category_name' => 'Mobile Accessories'],
            ['category_name' => 'Others'],
        ];

        DB::table('categories')->insert($data);
    }
}
