<?php

namespace Database\Seeders;

use App\Models\Brands;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brands::factory()->count(5)->create();
    }
}
