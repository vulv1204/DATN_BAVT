<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // Seeder cho bảng Products
public function run()
{
    Products::factory()->count(10)->create(); // Thêm 10 sản phẩm vào bảng products
}

}
