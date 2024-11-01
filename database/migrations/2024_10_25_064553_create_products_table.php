<?php

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Cột id tự tăng
            $table->string('name'); // Tên sản phẩm
            $table->string('description')->nullable(); // Mô tả sản phẩm
            $table->decimal('price', 10, 2); // Giá sản phẩm 
            $table->string('status')->default(\App\Models\Product::STATUS_SELL);
            $table->text('content')->nullable(); // Mô tả sản phẩm
            $table->foreignIdFor(Category::class)->constrained(); 
            $table->foreignIdFor(Brand::class)->constrained(); 
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
        Schema::dropIfExists('products');
    }
}
