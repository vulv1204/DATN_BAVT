<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable =[
        'e_vorcher',
        'quantity',
        'user_id',
        'start_date',
        'end_date',
    ];
    public function users(){
        return $this->hasMany(User::class);
    }
}
