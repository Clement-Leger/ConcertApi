<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_order extends Model
{
    use HasFactory;
    protected $fillable = [
        'delivery_email_address',
        'delivery_address',
        'discount',
        'total_price',
        'final_price',
        'time_paid',
    ];
}
