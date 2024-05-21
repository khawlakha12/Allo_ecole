<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use App\Models\NiveauScolaire;
use App\Models\AnneeScolaire;
use App\Models\Filieres;
use App\Models\Matiere;
use App\Models\User;
use App\Models\Course;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('niveaux', NiveauScolaire::all());
        View::share('annees', AnneeScolaire::all());
        View::share('filieres', Filieres::all());
        View::share('matieres', Matiere::all());
        View::share('courses', Course::all());
    }
}
