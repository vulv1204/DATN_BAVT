<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comments>
 */
class CommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'comment' => $this->faker->sentence(10),               // Nhận xét gồm 10 từ
        'rating' => $this->faker->numberBetween(1, 5),          // Đánh giá từ 1 đến 5
    ];
}

}
