<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filieres;
use App\Models\AnneeScolaire;
use App\Models\NiveauScolaire;

class FiliéreController extends Controller
{
    public function index()
    {
        $filieres = Filieres::all(); 
        return view('Admin.Filiére', compact('filieres')); 
    }

    public function ajouterFiliere(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'id_niveaux_scolaires' => 'required|exists:niveaux_scolaires,id',
            'id_annee' => 'required|exists:annees_scolaires,id',
        ]);
    
        $filiere = new Filieres(); 
        $filiere->nom = $request->nom;
        $filiere->id_niveau_scolaire = $request->id_niveaux_scolaires;
        $filiere->id_annee_scolaire = $request->id_annee;
        $filiere->save();
    
        return redirect()->back()->with('success', 'Filière ajoutée avec succès.');
    }
    public function filterByAnneesScolaires(Request $request)
    {
        $anneeId = $request->input('annee_id');
        $filieres = Filieres::where('id_annee_scolaire', $anneeId)->get();
        $annees = AnneeScolaire::all(); 

        return view('Admin.Filiére', compact( 'annees','filieres'));
    }
    }

