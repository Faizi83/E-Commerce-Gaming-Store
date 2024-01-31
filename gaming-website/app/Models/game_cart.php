<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game_cart extends Model
{
   
   
    use HasFactory;
    public $timestamps = false;
    protected $table = 'carts';
    protected $primaryKey = 'id';
    protected $fillable = [
    'game_id',
    'game_name',
    'game_image',
    'game_price',
    'game_qty',
    'game_desc'
    ];



};
