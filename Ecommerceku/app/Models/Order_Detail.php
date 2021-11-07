<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    use HasFactory;
    protected $table = 'order_detail';
    protected $fillable = [
        'product_id',
        'order_id',
        'price',
        'price_agent',
        'qty',
        'total_price',
    ];
}
