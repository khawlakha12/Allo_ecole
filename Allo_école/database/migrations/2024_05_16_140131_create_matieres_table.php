<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatieresTable extends Migration
{
    public function up()
    {
        Schema::create('matieres', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->foreignId('id_niveau_scolaire')->constrained('niveaux_scolaires');
            $table->foreignId('id_annee_scolaire')->constrained('annees_scolaires');
            $table->foreignId('id_filiere')->constrained('filieres');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('matieres');
    }
}
