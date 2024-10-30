<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('comments', function (Blueprint $table) {
        $table->id(); // Cột id tự tăng
        $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade'); // Khóa ngoại liên kết với bảng users, cho phép null
        $table->foreignId('product_id')->nullable()->constrained()->onDelete('cascade'); // Khóa ngoại liên kết với bảng products, cho phép null
        $table->text('comment'); // Nội dung bình luận
        $table->integer('rating')->nullable(); // Đánh giá của người dùng (có thể để trống)
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
        Schema::dropIfExists('comments');
    }
}
