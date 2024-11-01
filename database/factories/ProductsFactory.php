<?php

namespace Database\Factories;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'name' => $this->faker->word,                                // Tên sản phẩm
        'description' => $this->faker->sentence(10),                 // Mô tả ngắn (10 từ)
        'price' => $this->faker->randomFloat(2, 1, 1000),            // Giá ngẫu nhiên từ 1.00 đến 1000.00
        'quantity' => $this->faker->numberBetween(1, 100),           // Số lượng ngẫu nhiên từ 1 đến 100
        'category_id' => Categories::inRandomOrder()->first()?->id, // Lấy category_id hợp lệ từ bảng categories
    ];
}

}
