<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
    use HasFactory, SoftDeletes;
    
    public $table = "order_item";

    protected $fillable = [
        'orderId',
        'phoneName',
        'phoneDetailId',
        'quantity',
        'priceSale',
        'totalMoney',
    ];
}
