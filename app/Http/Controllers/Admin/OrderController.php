<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Visualizza una lista delle risorse.
     */
    public function index()
    {
        $user = Auth::user();
        $restaurantIds = $user->restaurants()->pluck('id');

        if ($restaurantIds->isEmpty()) {
            return "Nessun ristorante associato a questo utente.";
        }

        $orders = Order::with('dishes')  // Usa eager loading per includere i piatti
            ->whereIn('restaurant_id', $restaurantIds)
            ->get();

        if ($orders->isEmpty()) {
            return "Nessun ordine trovato.";
        }

        return view('admin.orders.index', ['orders' => $orders]);
    }
    /**
     * Mostra il modulo per creare una nuova risorsa.
     */
    public function create()
    {
        //
    }

    /**
     * Memorizza una nuova risorsa nel database.
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $restaurants = $user->restaurants()->first();

        if (!$restaurants) {
            return redirect()->back()->with('error', 'Nessun ristorante associato a questo utente.');
        }

        $data = $request->validate([
            'restaurant_id' => 'required',
            'name_client' => 'required|min:3',
            'email_client' => 'required|email',
            'number_phone' => 'required|numeric',
            'address_client' => 'required|min:4',
            'date' => 'required|date',
            'total' => 'required|decimal:5,2',
        ]);

        $newOrder = new Order();
        $newOrder->fill($data);
        $newOrder->save();

        return redirect()->route('admin.orders.index');
    }

    /**
     * Visualizza la risorsa specificata.
     */
    public function show(Order $order)
    {
        // Assicura che l'ordine appartenga al ristorante dell'utente autenticato
        $order = Order::where('id', $order->id)
            ->whereIn('restaurant_id', Auth::user()->restaurants()->pluck('id'))
            ->firstOrFail();

        return view('admin.orders.show', ['order' => $order]);
    }

    /**
     * Mostra il modulo per modificare la risorsa specificata.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Aggiorna la risorsa specificata nel database.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Rimuove la risorsa specificata dal database.
     */
    public function destroy(string $id)
    {
        //
    }
}
