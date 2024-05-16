<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matiere;
use App\Models\NiveauScolaire;
use App\Models\AnneeScolaire;

class MatiereController extends Controller
{
    public function index()
    {
        $annees = AnneeScolaire::all();
        $niveaux = NiveauScolaire::all();
        $matieres = Matiere::all();
        return view('Admin.Matiére', compact('matieres','niveaux','annees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'id_niveaux_scolaires' => 'required|exists:niveaux_scolaires,id',
            'id_annee_scolaire' => 'required|exists:annees_scolaires,id',
            'id_filiere' => 'exists:filieres,id',
        ]);
        
        try {
            $matiere = new Matiere();
            $matiere->nom = $request->nom;
            $matiere->id_niveau_scolaire = $request->id_niveaux_scolaires;
            $matiere->id_annee_scolaire = $request->id_annee_scolaire;
            $matiere->id_filiere = $request->id_filiere;
            $matiere->save();
    
            return redirect()->back()->with('success', 'Matière ajoutée avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'enregistrement de la matière : ' . $e->getMessage());
        }
    }

    public function edit(Matiere $matiere)
    {
        return view('matieres.edit', compact('matiere'));
    }

    public function update(Request $request, Matiere $matiere)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'id_niveau_scolaire' => 'required|exists:niveaux_scolaires,id',
            'id_annee_scolaire' => 'required|exists:annees_scolaires,id',
            'id_filiere' => 'required|exists:filieres,id',
        ]);

        $matiere->update($request->all());

        return redirect()->route('matieres.index')->with('success', 'Matière mise à jour avec succès.');
    }

    public function destroy(Matiere $matiere)
    {
        $matiere->delete();
        return redirect()->route('matieres.index')->with('success', 'Matière supprimée avec succès.');
    }
    public function filter(Request $request)
{
    $query = Matiere::query();

    if ($request->filled('niveau_id')) {
        $query->where('id_niveau_scolaire', $request->niveau_id);
    }

    if ($request->filled('annee_id')) {
        $query->where('id_annee_scolaire', $request->annee_id);
    }

    $matieres = $query->get();


    $niveaux = NiveauScolaire::all();
    $annees = AnneeScolaire::all();

    return view('Admin.Matiére', compact('matieres', 'niveaux', 'annees'));
}

}

