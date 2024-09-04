<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Type;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rules\Exists;
use Illuminate\View\View;
use Symfony\Contracts\Service\Attribute\Required;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $types = Type::all();

        $data = [
            'types' => $types
        ];
        return view('auth.register', $data);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validazione dei dati
        $request->validate([

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'max:255', Rules\Password::defaults()],
            'restaurant_name' => ['required', 'string', 'min:3', 'max:255'],
            'restaurant_address' => ['required', 'string', 'min:5', 'max:255'],
            'p_iva' => ['required', 'numeric', 'digits:11'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg,webp', 'max:2048'],
            'types' => ['required', 'array', 'min:1'],
            'types.*' => ['exists:types,id'],
        ]);

        // Creazione dell'utente
        $user = User::create([

            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($request->hasFile('image')) {
            $img_path = $request->file('image')->store('restaurants/images', 'public');
        } else {
            $img_path = null; // Se non c'è immagine, si può gestire questo caso
        }

        $restaurant = Restaurant::create([
            'user_id' => $user->id,
            'name' => $request->restaurant_name,
            'address' => $request->restaurant_address,
            'p_iva' => $request->p_iva,
            'image' => $img_path,
            //'types_id' => $types
        ]);

        // $user_id = auth()->user()->user_id;
        // Restaurant::create([
        //     'user_id' => $user_id,
        //     'name' => 'required|min:5',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        //     'p_iva' => 'required|numeric|digits:11',
        //     'address' => 'required|max:255',
        //     'types' => 'array|required|min:1',
        //     'types.*' => 'exists:types,id',
        // ]);

        $restaurant->type()->attach($request->types);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
