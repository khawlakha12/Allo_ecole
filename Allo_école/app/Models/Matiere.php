<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;

    protected $table = 'matieres';

    protected $fillable = ['nom', 'id_niveau_scolaire', 'id_annee_scolaire', 'id_filiere'];
    public function anneeScolaire()
    {
        return $this->belongsTo(AnneeScolaire::class, 'id_annee_scolaire');
    }

    public function niveauScolaire()
    {
        return $this->belongsTo(NiveauScolaire::class, 'id_niveau_scolaire');
    }
    public function filiere()
    {
        return $this->belongsTo(Filieres::class, 'id_filiere');
    }
}

