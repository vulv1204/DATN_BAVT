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
    public function product_img(){
        return $this->hasMany(ProductImg::class);
    }
}
