<?php

namespace Database\Seeders;

use App\Models\Carts;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Carts::factory()->count(5)->create();
    }
}
