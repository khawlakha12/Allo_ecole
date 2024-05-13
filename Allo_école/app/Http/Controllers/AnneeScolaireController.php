<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\AnneeScolaire;

class AnneeScolaireController extends Controller {
    public function index()
    {
        $annees = AnneeScolaire::all();
        return view('Admin.année', compact('annees'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_niveaux_scolaires' => 'required|exists:niveaux_scolaires,id',
            'nom' => 'required|string|max:255',
        ]);

        $annee = AnneeScolaire::create($validated);

        return redirect('/admin')->with('success', 'Année scolaire ajoutée avec succès.');
    }

}