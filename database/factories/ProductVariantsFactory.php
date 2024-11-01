<?php

namespace Database\Factories;


use App\Models\Products;
use App\Models\ProductVariants;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductVariantsFactory extends Factory
{
    protected $model = ProductVariants::class;

    public function definition(): array
    {
        return [
            'product_id' => Products::inRandomOrder()->first()?->id, // Lấy product_id hợp lệ từ bảng products
            'variant_type' => $this->faker->randomElement(['material', 'size', 'color']),
            'image' => $this->faker->imageUrl(200, 200), // URL hình ảnh ngẫu nhiên
            'variant_value' => $this->faker->word, // Giá trị biến thể
            'price' => $this->faker->randomFloat(2, 1, 1000), // Giá ngẫu nhiên
            'quantity' => $this->faker->numberBetween(1, 100), // Số lượng ngẫu nhiên
        ];
    }
}
