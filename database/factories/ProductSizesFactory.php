<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductSizes>
 */
class ProductSizesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    $product = Products::inRandomOrder()->first();

    return [
        'product_id' => $product ? $product->id : null, // Lấy ID sản phẩm ngẫu nhiên, hoặc null nếu không có sản phẩm nào
        'size' => $this->faker->sentence(2), // Kích thước sản phẩm
        'price' => $this->faker->randomFloat(2, 1, 1000), // Giá ngẫu nhiên
    ];
}

    

}
