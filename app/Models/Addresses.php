<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    use HasFactory;

    protected $fillable =[
        // 'user_id',
        // 'recipient_name',
        // 'phone_number',
        // 'street_address',
        // 'city',
        // 'state',
        // 'postal_code',
        // 'country',
        
    ];
    public function users(){
        return $this->hasMany(User::class);
    }
}
