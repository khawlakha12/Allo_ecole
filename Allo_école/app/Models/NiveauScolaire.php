<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NiveauScolaire extends Model
{
    protected $table = 'niveaux_scolaires';

    protected $fillable = ['nom'];
}
