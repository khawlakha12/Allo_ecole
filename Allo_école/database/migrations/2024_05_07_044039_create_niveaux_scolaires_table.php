<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNiveauxScolairesTable extends Migration
{
    public function up()
    {
        Schema::create('niveaux_scolaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('niveaux_scolaires');
    }
};