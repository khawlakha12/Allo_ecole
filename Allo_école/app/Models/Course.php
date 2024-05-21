<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AnneeScolaire;
use App\Models\NiveauScolaire;
use App\Models\Filieres;
use App\Models\Matiere;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'pdf_path', 
        'video_path', 
        'niveau_id', 
        'annee_id', 
        'filiere_id', 
        'matiere_id', 
        'section'
    ];

    /**
     * Get the niveau that owns the course.
     */
    public function niveau()
    {
        return $this->belongsTo(NiveauScolaire::class);
    }

    /**
     * Get the annee that owns the course.
     */
    public function annee()
    {
        return $this->belongsTo(AnneeScolaire::class);
    }

    /**
     * Get the filiere that owns the course.
     */
    public function filiere()
    {
        return $this->belongsTo(Filieres::class);
    }

    /**
     * Get the matiere that owns the course.
     */
    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }
}
