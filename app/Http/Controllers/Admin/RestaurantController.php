<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use illuminate\Support\Str;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $data = [
            'restaurants' => $user->restaurants()->orderByDesc('id')->get()
        ];
        return view('admin.restaurants.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'name' => 'required|min:10',
            'image' => 'required',
            'p_iva' => 'required',
            'address' => 'required'
        ]);

        //aggiungo slug al progetto
        //$data['slug'] = Str::slug($request->title, '-');

        //creo variabile dove metto il percorso per lo storage dove vanno a finire le immagini che prendo dal create e poi le attacco alla variabile data dove passo tutti i dati del validate
        $img_path = Storage::put('images', $request['image']);
        $data['image'] = $img_path;


        $newRestaurant = new Restaurant();

        $newRestaurant->fill($data);
        $newRestaurant->save();

        //dopo che ho slavato come nel seeder gli passo i linguaggi stavolta a mano tramite il create con le checkbox
        // $newProject->languages()->sync($data['languages']);


        return redirect()->route('admin.restaurants.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        $data = [
            'restaurants' => $restaurant
        ];
        return view('admin.restaurants.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        $data = [
            'restaurants' => $restaurant
        ];
        return view('admin.restaurants.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'name' => 'required|min:10',
            'image' => 'required',
            'p_iva' => 'required',
            'address' => 'required'
        ]);

        if ($request->has('image')) {
            // save the image
            $img_path = Storage::put('images', $request['image']);
            $data['image'] = $img_path;
            if ($restaurant->image && !Str::startsWith($restaurant->image, 'http')) {
                Storage::delete($restaurant->image);
            }
        }

        $restaurant->update($data);

        return redirect()->route('admin.restaurants.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        Storage::delete($restaurant->image);

        $restaurant->delete();

        return redirect()->route('admin.restaurants.index');
    }
}
