<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class ChartController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $restaurantIds = $user->restaurants()->pluck('id');
        // Funzione che gestisce la visione del numero degli ordini per mese
        $orders = Order::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, COUNT(*) as count')
                        ->whereIn('restaurant_id', $restaurantIds)
                        ->groupBy('month')
                        ->get();
        $labels = $orders->pluck('month');
        $data = $orders->pluck('count');
        // Funzione che gestisce il totale dei guadagni per mese del ristorante
        $ordersTotal = Order::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, COUNT(*) as count, SUM(total) as total_amount')
                        ->whereIn('restaurant_id', $restaurantIds)
                        ->groupBy('month')
                        ->get();

        $labelsTotal = $ordersTotal->pluck('month');
        $dataTotal = $ordersTotal->pluck('total_amount');

        return view('admin.orders.chart', compact('labels', 'data', 'labelsTotal', 'dataTotal'));
    }
}

