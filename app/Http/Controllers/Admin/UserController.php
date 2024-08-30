<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'users' => User::orderByDesc('id')->paginate(9)
        ];
        return view('admin.users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|min:10',
            'password' => 'required',
        ]);

        //aggiungo slug al progetto
        //$data['slug'] = Str::slug($request->title, '-');

        //creo variabile dove metto il percorso per lo storage dove vanno a finire le immagini che prendo dal create e poi le attacco alla variabile data dove passo tutti i dati del validate
        //$img_path = Storage::put('images', $request['img_preview']);
        //$data['img_preview'] = $img_path;


        $newUser = new User();

        $newUser->fill($data);
        $newUser->save();

        //dopo che ho slavato come nel seeder gli passo i linguaggi stavolta a mano tramite il create con le checkbox
        // $newProject->languages()->sync($data['languages']);


        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $data = [
            'users' => $user
        ];
        return view('admin.users.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $data = [
            'users' => $user
        ];
        return view('admin.users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|min:10',
            'password' => 'required',
        ]);

        $user->update($data);

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index');
    }
}
