<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    
    protected $table = 'products';

    
    protected $fillable = [
        'product_name',
        'category',
        'buy_price',
        'sell_price',
        'old_price',
        'stock_quantity',
        'size',
        'color',
        'description',
        'product_image'
    ];

    
    protected $casts = [
        'buy_price' => 'decimal:2',
        'sell_price' => 'decimal:2',
        'old_price' => 'decimal:2',
        'stock_quantity' => 'integer',
    ];
}
