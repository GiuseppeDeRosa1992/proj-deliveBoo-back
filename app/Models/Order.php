<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'name_client',
        'email_client',
        'number_phone',
        'address_client',
        'total'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function dish()
    {
        return $this->belongsToMany(Dish::class);
    }
    public function dishes()
    {
        return $this->belongsToMany(Dish::class, 'dish_order')
            ->withPivot('quantity'); // Assicurati che il nome della tabella pivot e i campi siano corretti
    }
}
