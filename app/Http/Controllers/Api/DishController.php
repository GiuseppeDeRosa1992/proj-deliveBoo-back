<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([
            'success' => true,
            'dishes' => Dish::orderByDesc('id'),
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
}
