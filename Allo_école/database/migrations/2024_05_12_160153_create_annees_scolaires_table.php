<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('annees_scolaires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_niveaux_scolaires');  
            $table->string('nom');
            $table->boolean('validation')->default(false);
            $table->timestamps();
            $table->foreign('id_niveaux_scolaires')->references('id')->on('niveaux_scolaires')->onDelete('cascade');
        });
    }

    public function down()
    {

        Schema::dropIfExists('annees_scolaires');
    }
};
