<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brands>
 */
class BrandsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'name' => $this->faker->company,                 // Tên công ty hoặc thương hiệu
        'founded_year' => $this->faker->year,            // Năm thành lập (dùng 'year' cho năm)
        'country' => $this->faker->country,              // Quốc gia
        'description' => $this->faker->sentence,         // Mô tả ngắn về công ty
        'logo' => $this->faker->imageUrl(200, 200),      // URL hình ảnh logo (200x200)
    ];
}

}
