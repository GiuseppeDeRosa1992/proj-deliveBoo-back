<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantType extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'type_id',
    ];
}
