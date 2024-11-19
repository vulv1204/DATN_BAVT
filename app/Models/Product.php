<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'view',
        'price',
        'status',
        'content',
        'brand_id',
    ];

    // Thiết lập quan hệ với model `Brand`
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    // Thiết lập quan hệ với model `ProductImg`
    public function productImgs()
    {
        return $this->hasMany(ProductImg::class);
    }

    // Thiết lập quan hệ với model `ProductSize`
    public function productSizes()
    {
        return $this->hasMany(ProductSize::class);
    }

    // Thiết lập quan hệ với model `Category`
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_products');
    }
}