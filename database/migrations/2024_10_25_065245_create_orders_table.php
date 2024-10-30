<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id(); // Cột id tự tăng
        $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade'); // Khóa ngoại liên kết với bảng users, cho phép null
        $table->decimal('total_price', 10, 2); // Tổng giá đơn hàng
        $table->string('status'); // Trạng thái đơn hàng
        $table->text('shipping_address'); // Địa chỉ giao hàng
        $table->string('payment_method'); // Phương thức thanh toán
        $table->timestamp('order_date'); // Ngày đặt hàng
        $table->timestamps(); // Tạo cột created_at và updated_at
    });
}


    /** 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
