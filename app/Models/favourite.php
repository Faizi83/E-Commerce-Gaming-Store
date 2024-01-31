<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favourite extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'favourites';
    protected $fillable = [
        'fav_name',
        'fav_rating',
        'fav_del_price',
        'fav_price',
        'fav_desc',
        'fav_image',
        'fav_id',
    ];
}
