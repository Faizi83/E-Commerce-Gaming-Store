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
        'product_rating',
        'product_del_price',
        'product_price',
        'product_desc',
        'product_image',
    ];
}
