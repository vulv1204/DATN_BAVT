<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;

    protected $fillable =[
    //    'name',
    //    ' founded_year',
    //     'country',
    //     'description',
    //     'logo',
    ];
    public function users(){
        return $this->hasMany(User::class);
    }
}
