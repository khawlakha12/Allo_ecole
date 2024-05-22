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

    $filieres = Filieres::whereHas('courses', function($query) use ($id) {
        $query->where('niveau_id', $id);
    })->get();

    $matieres = Matiere::whereHas('courses', function($query) use ($id) {
        $query->where('niveau_id', $id);
    })->get();

    $annees = AnneeScolaire::whereHas('courses', function($query) use ($id) {
        $query->where('niveau_id', $id);
    })->get();

    return view('pages.education', compact('courses', 'courseCount', 'filieres', 'matieres', 'annees'));
}

public function showCours($id)
{
    $course = Course::findOrFail($id);
    return view('pages.course', compact('course'));
}

}    
