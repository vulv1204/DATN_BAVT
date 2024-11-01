<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const STATUS_ODER = [
        'chờ xử lý' => 'chờ đến lượt xử lý',
        'đang xử lý' => 'đang tiến hành xử lý',
        'đã giao hàng' => 'đã giao đến chỗ người nhận',
        'đang giao' => 'đang trên đường giao đến chỗ người nhân',
        'đã hủy' => 'hủy đơn hàng',
        'đã hoàn tiền' => 'đã hoàn tiền cho khách hàng',
        'đã trả lại' => 'đã nhận được hàng hoàn',
    ];

    const STATUS_PAYMENT = [
        'momo' => 'ví điện tử',
        'PayPal' => 'ví điện tử',
        'trả khi nhận hàng' => 'Thanh toán tiền mặt',
    ];

    protected $fillable =[
        'user_id',
        'address_id',
        'status_order',
        'status_payment',
        'total_price',
    ];
    public function users(){
        return $this->hasMany(User::class);
    }
}
