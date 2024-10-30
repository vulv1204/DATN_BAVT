<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('carts', function (Blueprint $table) {
        $table->id(); // Cột id tự tăng
        $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade'); // Khóa ngoại liên kết với bảng users, cho phép null
        $table->foreignId('product_id')->nullable()->constrained()->onDelete('cascade'); // Khóa ngoại liên kết với bảng products, cho phép null
        $table->integer('quantity'); // Số lượng sản phẩm trong giỏ hàng
        $table->decimal('price', 10, 2); // Giá sản phẩm tại thời điểm thêm vào giỏ
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
        Schema::dropIfExists('carts');
    }
}
