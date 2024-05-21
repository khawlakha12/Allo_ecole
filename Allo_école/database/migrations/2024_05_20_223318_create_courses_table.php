<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pdf_path')->nullable();
            $table->string('video_path')->nullable();
            $table->unsignedBigInteger('niveau_id');
            $table->unsignedBigInteger('annee_id');
            $table->unsignedBigInteger('filiere_id');
            $table->unsignedBigInteger('matiere_id');
            $table->enum('section', ['Section 1', 'Section 2']);
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('niveau_id')->references('id')->on('niveaux')->onDelete('cascade');
            $table->foreign('annee_id')->references('id')->on('annees')->onDelete('cascade');
            $table->foreign('filiere_id')->references('id')->on('filieres')->onDelete('cascade');
            $table->foreign('matiere_id')->references('id')->on('matieres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
