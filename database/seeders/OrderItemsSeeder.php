<?php

namespace Database\Seeders;

use App\Models\OrderItems;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderItems::factory()->count(5)->create();
    }
}
