<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Dish;
use App\Models\Restaurant;
use App\Models\DishOrder;
use App\Mail\NewOrder;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $order = $request->all();

        $validatedOrder = $request->validate([
            'restaurant_id' => 'required|integer',
            'name_client' => 'required|string',
            'email_client' => 'required|email',
            'number_phone' => 'required|string',
            'address_client' => 'required|string',
            'total' => 'required|string',
            'dishes' => 'required|array',
            'dishes.*.dish_id' => 'required|integer|exists:dishes,id',
            'dishes.*.name_dish' => 'required|string',
            'dishes.*.price_dish' => 'required|string',
            'dishes.*.quantity' => 'required|integer|min:1',
        ]);

        //serve per evitare di scrivere cose a metà sul database ma scrive solamente quando tutto è andato a buon fine
        DB::transaction(function () use ($validatedOrder) {
            // Crea l'ordine
            $order = Order::create([
                'restaurant_id' => $validatedOrder['restaurant_id'],
                'name_client' => $validatedOrder['name_client'],
                'email_client' => $validatedOrder['email_client'],
                'number_phone' => $validatedOrder['number_phone'],
                'address_client' => $validatedOrder['address_client'],
                //FLOATVAL SERVE A CAMBAIRE LA STRINGA CHE MI VIENE PASSATA DA JS IN DECIMAL CH ESERVE AL BACK-END
                'total' => floatval($validatedOrder['total']),
            ]);

            // Crea i dati da inserire nelle colonne della tabella ponte
            foreach ($validatedOrder['dishes'] as $dishData) {
                DishOrder::create([
                    'order_id' => $order->id,
                    'dish_id' => $dishData['dish_id'],
                    'name_dish' => $dishData['name_dish'],
                    'price_dish' => floatval($dishData['price_dish']),
                    'quantity' => $dishData['quantity'],
                ]);
            }
        });

        // Recupera l'indirizzo email del ristorante
        $restaurant = Restaurant::find($validatedOrder['restaurant_id']);

        if (!$restaurant) {
            return response()->json(['error' => 'Ristorante non trovato'], 404);
        }

        $user = $restaurant->user;
        $restaurantEmail = $user->email;


        // Invia l'email
        Mail::to($restaurantEmail)->send(new NewOrder($order));

        return response()->json(['message' => 'Ordine Effettuato con Successo']);
    }
}
