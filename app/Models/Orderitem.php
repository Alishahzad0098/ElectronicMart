<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
protected $fillable = [
    'order_id',
    'product_name',
    'price',
    'quantity',
    'images',
];


    // OrderItem.php
public function order()
{
    return $this->belongsTo(Order::class);
}

}
