<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Restaurant;
use App\Models\Type;
use App\Models\Dish;
use App\Http\Controllers\BraintreeController;

use App\Http\Controllers\Api\RestaurantController;
use App\Http\Controllers\Api\DishController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('restaurants', function () {
    return Restaurant::with(['type', 'dish'])->get();
});

//creo rotta per i dettagli dei ristoranti che richiamo in js
Route::get('restaurants/{restaurant:slug}', [RestaurantController::class, 'show']);

//creo rotta per i dettagli dei piatti che richiamo in js
Route::get('dishes/{dish:slug}', [Dishcontroller::class, 'show']);

Route::get('/dishes', [DishController::class, 'index']); // Per ottenere tutti i piatti
Route::get('/restaurants/{slug}/dishes', [DishController::class, 'getDishesByRestaurant']); // Per ottenere i piatti di un ristorante specifico
Route::get('/braintree/token', [BraintreeController::class, 'generateToken']);
Route::post('/braintree/checkout', [BraintreeController::class, 'checkout']);
