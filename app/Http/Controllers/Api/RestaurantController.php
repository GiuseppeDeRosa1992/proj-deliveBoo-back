<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Type;
use App\Models\Dish;
use Illuminate\Http\Request;


class RestaurantController extends Controller
{
    public function index(){
        $restaurants = Restaurant::with(['type','dish'])->get();
        return response()->json([
            'success'=> true,
            'result'=> $restaurants
        ]);
    }
}
