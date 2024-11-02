<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CartsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'quantity' => $this->faker->numberBetween(1, 100),   // Số lượng từ 1 đến 100
        'price' => $this->faker->randomFloat(2, 1, 1000),    // Giá với 2 chữ số thập phân, từ 1 đến 1000
    ];
}

}
