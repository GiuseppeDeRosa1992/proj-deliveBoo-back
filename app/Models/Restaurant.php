<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'slug',
        'name',
        'image',
        'p_iva',
        'address'

    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function dish()
    {
        return $this->hasMany(Dish::class);
    }

    public function type()
    {
        return $this->belongsToMany(Type::class);
    }
}
