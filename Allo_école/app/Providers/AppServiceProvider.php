<?php

namespace App\Providers;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\NiveauScolaire;
use App\Models\AnneeScolaire;
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
    }
}
