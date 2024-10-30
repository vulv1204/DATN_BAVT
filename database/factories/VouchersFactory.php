<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VouchersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'code' => $this->faker->bothify('CODE-###'),                // Mã khuyến mãi với định dạng CODE-XXX
        'start_date' => $this->faker->dateTimeBetween('now', '+1 month'), // Ngày bắt đầu trong khoảng từ bây giờ đến 1 tháng sau
        'end_date' => $this->faker->dateTimeBetween('+1 month', '+3 months'), // Ngày kết thúc trong khoảng từ 1 tháng đến 3 tháng sau
        'usage_limit' => $this->faker->numberBetween(1, 100),      // Giới hạn sử dụng ngẫu nhiên từ 1 đến 100
        'used_count' => $this->faker->numberBetween(0, 50),         // Số lần đã sử dụng ngẫu nhiên từ 0 đến 50
    ];
}

}
