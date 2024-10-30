<?php

namespace Database\Factories;

use App\Models\Orders;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    // Lấy một đơn hàng ngẫu nhiên từ bảng orders
    $order = Orders::inRandomOrder()->first(); // Lấy đơn hàng ngẫu nhiên

    return [
        'order_id' => $order ? $order->id : null, // Lấy order_id hợp lệ, hoặc null nếu không có đơn hàng
        'quantity' => fake()->numberBetween(1, 100), // Số lượng sản phẩm ngẫu nhiên
        'price' => fake()->randomFloat(2, 1, 1000), // Giá sản phẩm ngẫu nhiên
        'created_at' => now(), // Thời gian tạo
        'updated_at' => now(), // Thời gian cập nhật
    ];
}

    

}
