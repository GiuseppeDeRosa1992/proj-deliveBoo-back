<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index()
    {
        $dishes = Dish::orderByDesc('id')->get();

        if ($dishes->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Nessun piatto disponibile'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'dishes' => $dishes
        ]);
    }

    public function show($slug)
    {
        //creo variabile per lo slug dei piatti
        $dish = Dish::where('slug', $slug)->first();

        if ($dish) {
            return response()->json([
                'success' => true,
                'dish' => $dish
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'not found'
            ]);
        };
    }

    public function getDishesByRestaurant($restaurantSlug)
    {
        // Recupera i piatti del ristorante con lo slug fornito
        $dishes = Dish::whereHas('restaurant', function ($query) use ($restaurantSlug) {
            $query->where('slug', $restaurantSlug);
        })->get();

        if ($dishes->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Nessun piatto trovato per questo ristorante'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'dishes' => $dishes
        ]);
    }
}
