<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NiveauScolaire extends Model
{
    protected $table = 'niveaux_scolaires';

    protected $fillable = ['nom'];
    public function anneesScolaires()
    {
        return $this->hasMany(AnneeScolaire::class, 'id_niveaux_scolaires');
    }
}
