<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilieresTable extends Migration
{
    public function up()
    {
        Schema::create('filieres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_annee_scolaire');
            $table->unsignedBigInteger('id_niveau_scolaire');
            $table->string('nom');
            $table->timestamps();
            
            $table->foreign('id_annee_scolaire')->references('id')->on('annees_scolaires')->onDelete('cascade');
            $table->foreign('id_niveau_scolaire')->references('id')->on('niveaux_scolaires')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('filieres');
    }
}
