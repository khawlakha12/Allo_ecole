<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NiveauScolaire;

class NiveauxScolaireController extends Controller
{
    public function index()
    {
        $niveaux = NiveauScolaire::all();
        return view('Admin.dashboard', compact('niveaux'));
    }

    public function store(Request $request)
{
    $request->validate([
        'nom' => 'required|string|max:255',
    ]);

    $niveaux = NiveauScolaire::create([
        'nom' => $request->nom,
    ]);
    return redirect()->route('Dashboard')->with('success', 'Niveau scolaire ajouté avec succès.');
}
}
