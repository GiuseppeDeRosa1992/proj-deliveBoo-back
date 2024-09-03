<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //filtro i piatti tramite l'user loggato
        $user = Auth::user();
        //recupero con wherein solo i piatti con il restaurant_id associato
        $data = [
            'dishes' => Dish::whereIn('restaurant_id', $user->restaurants()->pluck('id'))->orderByDesc('id')->get()
        ];
        return view('admin.dishes.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dishes.create');
    }

    public function store(Request $request)
    {

        $user = Auth::user();

        $restaurant = $user->restaurants()->first();

        if (!$restaurant) {
            return redirect()->back()->with('error', 'Nessun ristorante associato a questo utente.');
        };

        $data = $request->validate([
            'restaurant_id' => 'nullable',
            'name' => 'required|min:4',
            'description' => 'required|string|min:10',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'price' => [
                'required',
                'regex:/^\d+(\.\d{1,2})?$/',
                'max:7',
            ],
            'visible' => 'required|boolean'
        ]);

        $data['restaurant_id'] = $restaurant->id;

        //aggiungo slug al progetto
        //$data['slug'] = Str::slug($request->title, '-');

        //creo variabile dove metto il percorso per lo storage dove vanno a finire le immagini che prendo dal create e poi le attacco alla variabile data dove passo tutti i dati del validate
        $img_path = Storage::put('images', $request['image']);
        $data['image'] = $img_path;


        $newDish = Dish::create($data);



        $newDish->fill($data);
        $newDish->save();

        return redirect()->route('admin.dishes.index')->with('success', 'Piatto creato con successo!');

        //dopo che ho slavato come nel seeder gli passo i linguaggi stavolta a mano tramite il create con le checkbox
        // $newProject->languages()->sync($data['languages']);


        return redirect()->route('admin.dishes.index');
    }

    public function show(Dish $dish)
    {
        $data = [
            'dishes' => $dish,
            $dish = Dish::where('id', $dish->id)->where('restaurant_id', auth()->id())->firstOrFail(),
        ];
        return view('admin.dishes.show', $data);
    }

    public function edit(Dish $dish)
    {
        $data = [
            'dishes' => $dish
        ];
        return view('admin.dishes.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dish $dish)
    {
        $data = $request->validate([
            'restaurant_id' => 'nullable',
            'name' => 'required|min:4',
            'description' => 'required|string|min:10',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'price' => [
                'required',
                'regex:/^\d+(\.\d{1,2})?$/',
                'max:7',
            ],
            'visible' => 'required|boolean'
        ]);

        if ($request->has('image')) {
            // save the image
            $img_path = Storage::put('images', $request['image']);
            $data['image'] = $img_path;
            if ($dish->image && !Str::startsWith($dish->image, 'http')) {
                Storage::delete($dish->image);
            }
        };

        $dish->update($data);

        return redirect()->route('admin.dishes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)

    {
        /*ATTENZIONE---> Modifica da non definitiva*/
        /** Storage::delete($dish->image);*/


        $dish->delete();

        return redirect()->route('admin.dishes.index');
    }
}
