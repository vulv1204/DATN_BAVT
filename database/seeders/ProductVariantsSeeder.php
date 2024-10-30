<?php

namespace Database\Seeders;



use App\Models\ProductVariants;
use Illuminate\Database\Seeder;


class ProductVariantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductVariants::factory()->count(5)->create();
    }
}
