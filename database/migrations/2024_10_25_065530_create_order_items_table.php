<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('order_items', function (Blueprint $table) {
        $table->id(); // Cột id tự tăng
        $table->foreignId('order_id')->constrained()->onDelete('cascade'); // Khóa ngoại liên kết với bảng orders
        $table->integer('quantity'); // Số lượng sản phẩm
        $table->decimal('price', 10, 2); // Giá sản phẩm
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
        Schema::dropIfExists('order_items');
    }
}
