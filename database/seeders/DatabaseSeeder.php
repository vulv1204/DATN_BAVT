<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\GroupSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(AddressesSeeder::class);
        $this->call(BrandsSeeder::class);
        $this->call(CartsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(CommentsSeeders::class);
        $this->call(OrdersSeeder::class);
        $this->call(OrderItemsSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(ProductSizesSeeder::class);
        $this->call(ProductVariantsSeeder::class);
        $this->call(VouchersSeeder::class);
    }
}
