<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const STATUS = [
        'sell' => 'Bán sản phẩm',
        'do not sell' => 'Không bán sản phẩm',
    ];

    const STATUS_SELL = 'sell';
    const STATUS_NOT_SELL = 'not sell';

    protected $fillable =[
        'name',
        'description',
        'status',
        'content',
        'categories_products_id',
        'brand_id',
    ];
    public function product_imgs(){
        return $this->hasMany(ProductImg::class);
    }

    public function category_product() {
        return $this->belongsTo(CategoryProduct::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }

    public function productImgs(){
        return $this->hasMany(ProductImg::class);
    }

    public function productSizes(){
        return $this->hasMany(ProductSize::class);
    }

    public function views(){
        return $this->hasMany(View::class);
    }
}
