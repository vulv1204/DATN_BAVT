<?php

namespace Database\Seeders;

use App\Models\Vouchers;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VouchersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vouchers::factory()->count(5)->create();
    }
}
