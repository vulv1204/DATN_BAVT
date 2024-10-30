<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'total_price' => $this->faker->randomFloat(2, 10, 500),   // Tổng giá ngẫu nhiên từ 10.00 đến 500.00
        'status' => $this->faker->randomElement(['pending', 'completed', 'cancelled']), // Trạng thái đơn hàng ngẫu nhiên
        'shipping_address' => $this->faker->address,               // Địa chỉ giao hàng
        'payment_method' => $this->faker->randomElement(['credit_card', 'paypal', 'bank_transfer']), // Phương thức thanh toán ngẫu nhiên
        'order_date' => $this->faker->dateTimeThisYear(),          // Ngày đặt hàng trong năm hiện tại
    ];
}

}
