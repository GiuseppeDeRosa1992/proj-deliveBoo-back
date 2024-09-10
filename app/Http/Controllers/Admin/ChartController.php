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
        $ordersMonth = Order::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, COUNT(*) as count')
                        ->whereIn('restaurant_id', $restaurantIds)
                        ->groupBy('month')
                        ->get();
        $labelsMonth = $ordersMonth->pluck('month');
        $dataMonth = $ordersMonth->pluck('count');
        // Funzione che gestisce la visione del numero degli ordini per anno
        $ordersYear = Order::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as year, COUNT(*) as count')
                        ->whereIn('restaurant_id', $restaurantIds)
                        ->groupBy('year')
                        ->get();
        $labelsYear = $ordersYear->pluck('year');
        $dataYear = $ordersYear->pluck('count');
        // Funzione che gestisce il totale dei guadagni per mese del ristorante
        $ordersTotalMonth = Order::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, COUNT(*) as count, SUM(total) as total_amount')
                        ->whereIn('restaurant_id', $restaurantIds)
                        ->groupBy('month')
                        ->get();

        $labelsTotalMonth = $ordersTotalMonth->pluck('month');
        $dataTotalMonth = $ordersTotalMonth->pluck('total_amount');
        // Funzione che gestisce il totale dei guadagni per anno del ristorante
        $ordersTotalYear = Order::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as year, COUNT(*) as count, SUM(total) as total_amount')
                        ->whereIn('restaurant_id', $restaurantIds)
                        ->groupBy('year')
                        ->get();

        $labelsTotalYear = $ordersTotalYear->pluck('year');
        $dataTotalYear = $ordersTotalYear->pluck('total_amount');


        return view('admin.orders.chart', compact('labelsMonth', 'dataMonth', 'labelsYear', 'dataYear', 'labelsTotalMonth', 'dataTotalMonth', 'labelsTotalYear', 'dataTotalYear',));
    }
}

