<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //filtro i piatti tramite l'user loggato
        $user = Auth::user();
        //recupero con la variabile user i dati del ristorante associato ad ogni user
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

        $types = Type::all();

        $data = [
            'types' => $types
        ];

        return view('admin.restaurants.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'nullable',
            'name' => 'required|min:5',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'p_iva' => 'required|numeric|digits:11',
            'address' => 'required|max:255',
            'types' => 'array|required|min:1',
            'types.*' => 'exists:types,id',
        ]);

        //aggiungo slug al progetto
        //$data['slug'] = Str::slug($request->title, '-');

        //creo variabile dove metto il percorso per lo storage dove vanno a finire le immagini che prendo dal create e poi le attacco alla variabile data dove passo tutti i dati del validate
        $img_path = Storage::put('images', $request['image']);
        $data['image'] = $img_path;
        // $img_path = $request->file('image')->store('images');
        // $data['image'] = $img_path;
        // if ($request->hasFile('image')) {
        //     $img_path = $request->file('image')->store('images', 'public');
        //     $data['image'] = asset('storage/' . $img_path);
        // } else {
        //     // Gestisci il caso in cui non viene caricato nessun file
        //     $data['image'] = null;
        // }



        $restaurant = new Restaurant();
        $restaurant->name = $request->name;
        $restaurant->image = $request->file('image')->store('images');
        $restaurant->p_iva = $request->p_iva;
        $restaurant->address = $request->address;
        $restaurant->user_id = auth()->user()->id; // Imposta automaticamente l'user_id
        $restaurant->save();
        $restaurant->type()->sync($data['types']);

        return redirect()->route('admin.restaurants.index')->with('success', 'Ristorante aggiunto con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        $data = [
            'restaurants' => $restaurant,
            $restaurant = Restaurant::where('id', $restaurant->id)->where('user_id', auth()->id())->firstOrFail(),
        ];
        return view('admin.restaurants.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {

        $types = Type::all();

        $data = [
            'restaurants' => $restaurant,
            'types' => $types
        ];
        return view('admin.restaurants.edit', $data);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        $data = $request->validate([
            'name' => 'required|min:5',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'p_iva' => 'required|numeric|digits:11',
            'address' => 'required|max:255',
            'types' => 'array',
            'types.*' => 'exist:types,id'
        ]);

        if ($request->hasFile('image')) {
            // save the new image
            $img_path = $request->file('image')->store('images', 'public');
            $data['image'] = $img_path;

            // delete the old image if it exists and is not a URL
            if ($restaurant->image && !Str::startsWith($restaurant->image, 'http')) {
                Storage::delete($restaurant->image);
            }
        } else {
            // keep the existing image if no new image is uploaded
            $data['image'] = $restaurant->image;
        }


        $restaurant->update($data);

        return redirect()->route('admin.restaurants.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        // Storage::delete($restaurant->image);

        $restaurant->delete();

        return redirect()->route('admin.restaurants.index');
    }
}
