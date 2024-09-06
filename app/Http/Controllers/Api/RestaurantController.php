<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        // Filtro per categoria di ristoranti
        $type = $request->input('type'); // Filtro per tipo
        $query = Restaurant::with(['type', 'dish']); // Associa sia tipi che piatti

        // Se viene fornito un filtro per il tipo, applicalo
        if ($type) {
            $query->whereHas('type', function($q) use ($type) {
                $q->where('name', 'LIKE', '%' . $type . '%');
            });
        }

        // Esegui la query e ottieni i ristoranti (filtrati se necessario)
        $restaurants = $query->get();

        return response()->json([
            'success' => true,
            'result' => $restaurants
        ]);
    }
}

