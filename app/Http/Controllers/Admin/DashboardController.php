<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Dish;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //filtro i piatti tramite l'user loggato
        $user = Auth::user();

        // Recupero i piatti associati ai ristoranti dell'utente loggato
        $dishes = Dish::whereIn('restaurant_id', $user->restaurants()->pluck('id'))->orderByDesc('id')->get();

        // Calcolo il numero totale dei piatti
        $totalDishes = $dishes->count();

        //recupero con la variabile user i dati del ristorante associato ad ogni user
        $data = [
            'restaurants' => $user->restaurants()->orderByDesc('id')->get(),
            'dishes' => $dishes,
            'totalDishes' => $totalDishes,
        ];

        return view('admin.dashboard', $data);
    }
}
