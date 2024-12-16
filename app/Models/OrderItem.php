<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['order_id', 'product_name', 'quantity', 'price', 'subtotal'];

    // Relationship with Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
