<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'name',
        'slug',
        'description',
        'image',
        'price',
        'visible'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'dish_order')
            ->withPivot('quantity'); // Assicurati che il nome della tabella pivot e i campi siano corretti

    }
}
