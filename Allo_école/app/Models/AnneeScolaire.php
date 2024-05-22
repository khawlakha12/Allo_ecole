<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnneeScolaire extends Model
{
    protected $table = 'annees_scolaires'; 

    protected $fillable = [
        'id_niveaux_scolaires',
        'nom',
        'validation',
    ];

    public function niveauScolaire()
    {
        return $this->belongsTo(NiveauScolaire::class, 'id_niveaux_scolaires');
    }
    public function courses()
    {
        return $this->hasMany(Course::class, 'annee_id');
    }
}

