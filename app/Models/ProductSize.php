<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;

    protected $fillable =[
        'product_id',
        'size',
        'price',
        'img',
        'quantity',
    ];
    public function carts(){
        return $this->hasMany(Cart::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
