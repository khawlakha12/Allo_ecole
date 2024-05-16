<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AnneeScolaire;
use App\Models\NiveauScolaire;

class Filieres extends Model 
{
    protected $table = 'filieres'; 

    protected $fillable = ['nom', 'id_annee_scolaire', 'id_niveau_scolaire']; 
    public function anneeScolaire()
    {
        return $this->belongsTo(AnneeScolaire::class, 'id_annee_scolaire');
    }

    public function niveauScolaire()
    {
        return $this->belongsTo(NiveauScolaire::class, 'id_niveau_scolaire');
    }
}
