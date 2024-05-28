<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\NiveauScolaire;
use App\Models\Filieres;
use App\Models\AnneeScolaire;
use App\Models\Matiere;
class CourseController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'pdf_path' => 'nullable|file|mimes:pdf',
            'video_path' => 'nullable|file|mimes:mp4,avi,mkv',
            'niveau_id' => 'required|exists:niveaux_scolaires,id',
            'annee_id' => 'required|exists:annees_scolaires,id',
            'filiere_id' => 'required|exists:filieres,id',
            'matiere_id' => 'required|exists:matieres,id',
            'section' => 'required|in:1,2',
        ]);
    
        $pdfPath = $request->file('pdf_path') ? $request->file('pdf_path')->store('pdfs') : null;
        $videoPath = $request->file('video_path') ? $request->file('video_path')->store('videos') : null;
    
        Course::create([
            'name' => $request->name,
            'pdf_path' => $pdfPath,
            'video_path' => $videoPath,
            'niveau_id' => $request->niveau_id,
            'annee_id' => $request->annee_id,
            'filiere_id' => $request->filiere_id,
            'matiere_id' => $request->matiere_id,
            'section' => $request->section,
        ]);
    
        return redirect()->back()->with('success', 'Course created successfully.');
    }
    public function show($id)
{
    $course = Course::findOrFail($id);
    return view('Admin.filemanager-list', compact('course'));
}
public function coursesByNiveau($id)
{
    $courses = Course::where('niveau_id', $id)->get();
    $courseCount = $courses->count();
    $niveau = NiveauScolaire::findOrFail($id);
    $selectedNiveau = NiveauScolaire::find($id)->nom;
    $annees = AnneeScolaire::where('id_niveaux_scolaires', $id)->get();
    $filieres = Filieres::where('id_niveau_scolaire', $id)->get();
    $matieres = Matiere::where('id_niveau_scolaire', $id)->get();
    return view('pages.education', compact('courses','selectedNiveau','courseCount', 'filieres', 'matieres', 'annees'));
}

public function showCours($niveauId)
{
    $niveau = NiveauScolaire::findOrFail($niveauId);
    
    $annees = AnneeScolaire::where('niveau_id', $niveauId)->get();
    $filieres = Filieres::where('niveau_id', $niveauId)->get();
    $matieres = Matiere::where('niveau_id', $niveauId)->get();

    return view('pages.education', compact('niveau', 'annees', 'filieres', 'matieres'));
}

}    
