<?php

namespace Database\Seeders;

use App\Models\Addresses;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Addresses::factory()->count(5)->create();
    }
}
