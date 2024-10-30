<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $fillable =[
        // 'name',
        // 'Display_oder',
        
    ];
    public function users(){
        return $this->hasMany(User::class);
    }
}
