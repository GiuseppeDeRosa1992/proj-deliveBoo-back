<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Storage;
use illuminate\Support\Str;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'orders' => Order::orderByDesc('id')
        ];
        return view('admin.orders.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'restaurant_id' => 'required',
            'name_client' => 'required|min:3',
            'email_client' => 'required|min:10',
            'number_phone' => 'required|numeric',
            'address_client' => 'required|min:10',
            'date' => 'required|date',
            'total' => 'required|decimal:5,2',
        ]);

        //aggiungo slug al progetto
        //$data['slug'] = Str::slug($request->title, '-');

        //creo variabile dove metto il percorso per lo storage dove vanno a finire le immagini che prendo dal create e poi le attacco alla variabile data dove passo tutti i dati del validate
        // $img_path = Storage::put('images', $request['image']);
        // $data['image'] = $img_path;


        $newOrder = new Order();

        $newOrder->fill($data);
        $newOrder->save();

        //dopo che ho slavato come nel seeder gli passo i linguaggi stavolta a mano tramite il create con le checkbox
        // $newProject->languages()->sync($data['languages']);


        return redirect()->route('admin.orders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $data = [
            'orders' => $order
        ];
        return view('admin.orders.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
