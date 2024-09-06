<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //filtro i piatti tramite l'user loggato
        $user = Auth::user();
        //recupero con la variabile user i dati del ristorante associato ad ogni user
        $data = [
            'restaurants' => $user->restaurants()->orderByDesc('id')->get()
        ];
        return view('admin.dashboard', $data);
    }
}
