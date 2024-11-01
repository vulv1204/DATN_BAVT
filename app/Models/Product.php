<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const STATUS = [
        'Bán' => 'Bán sản phẩm',
        'Không bán' => 'Không bán sản phẩm',
    ];

    protected $fillable =[
        'name',
        'description',
        'status',
        'content',
        'categories_products_id',
        'brand_id',
    ];
    public function product_img(){
        return $this->hasMany(ProductImg::class);
    }
}
