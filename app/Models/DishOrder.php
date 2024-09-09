<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DishOrder extends Model
{
    use HasFactory;

    //Funzione che serve a laravel per identificare tabella da usare se non si seguono le convenzioni
    protected $table = 'dish_order';

    protected $fillable = [
        'order_id',
        'dish_id',
        'name_dish',
        'price_dish',
        'quantity'
    ];
}
