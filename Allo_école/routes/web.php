<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\userController;
use App\Http\Controllers\NiveauxScolaireController;
use App\Http\Controllers\AnneeScolaireController;
use App\Models\NiveauScolaire;
use App\Http\Controllers\FiliéreController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Log;
use App\Http\Middleware\EnsureUserIsAdmin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/niveaux', function () {
    return view('Admin.grid-tables');
});
Route::get('/404', function () {
    return view('Admin.404');
});
Route::get('/formateur', function () {
    return view('Admin.formateur');
});
Route::get('/course', function () {
    return view('Admin.file-manager');
});
Route::get('/detail_course', function () {
    return view('Admin.filemanager-details');
});
Route::get('/liste_course', function () {
    return view('Admin.filemanager-list');
});
Route::get('/to_do', function () {
    return view('Admin.to-do-list');
});

Route::get('/', function(){
    return view('pages.home');
});
Route::get('/contact', function(){
    return view('pages.contact');
});
Route::get('/profile_étudient', function(){
    return view('pages.profile');
});

Route::get('/dashboard_étudient', function(){
    return view('pages.Dashboard_étu');
});

//----------------------------Authentification----------------------------//
Route::post('/register', [AuthController::class, 'register']);
Route::get('/register', function () {
    return view('Auth.register');
});
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//----------------------------Middlware----------------------------//
Route::get('/admin', function() {
    return view('Admin.dashboard');
})->middleware(['auth', 'isAdmin']);
Route::get('/profile', [userController::class, 'userlogged'])->name('profile')->middleware('auth');

//----------------------------Niveaux Scolaire----------------------------//
Route::post('/admin', [NiveauxScolaireController::class, 'store'])->name('niveaux.store');
Route::delete('/admin/{niveau}', [NiveauxScolaireController::class, 'destroy'])->name('niveaux.destroy');

//----------------------------Année Scolaire----------------------------//
Route::post('/année_scolaire', [AnneeScolaireController::class, 'store'])->name('annees_scolaires.store');
Route::get('/filter-annees', [AnneeScolaireController::class, 'filter'])->name('filter_annees');
Route::delete('/admin/annee-scolaire/{id}', [AnneeScolaireController::class, 'destroy']);
Route::put('/admin/annee-scolaire/{id}', [AnneeScolaireController::class, 'update']);

//----------------------------Filiére----------------------------//
Route::post('/Filiére', [FiliéreController::class, 'ajouterFiliere'])->name('ajouter_filiere');
Route::get('/filter-annees-scolaires', [FiliéreController::class, 'filterByAnneesScolaires'])->name('filter_annees_scolaires');
Route::delete('/Filiére', [FiliéreController::class, 'destroy'])->name('filieres.destroy');
Route::put('/Filiére', [FiliéreController::class, 'update'])->name('filieres.update');

//----------------------------Matiére----------------------------//
Route::post('/Matiére', [MatiereController::class, 'store'])->name('matieres.store');
Route::get('/Matiére/{matiere}/edit', [MatiereController::class, 'edit'])->name('matieres.edit');
Route::put('/Matiére/{matiere}', [MatiereController::class, 'update'])->name('matieres.update');
Route::delete('/Matiére/{matiere}', [MatiereController::class, 'destroy'])->name('matieres.destroy');
Route::get('/Matiére', [MatiereController::class, 'filter'])->name('filter_annees_scolaires');

//----------------------------Courses----------------------------//
Route::get('/course', function () {
    return view('Admin.Courses');
});
Route::get('/files_course', function () {return view('Admin.filemanager-list');
});
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
Route::get('/files_course/{id}', [CourseController::class, 'show'])->name('filemanager.details');

//----------------------------éducation----------------------------//
Route::get('/education/niveau/{id}', [CourseController::class, 'coursesByNiveau'])->name('courses');
Route::get('/education/course/{id}', [CourseController::class, 'showCours'])->name('course.show');

//----------------------------Admin----------------------------//

Route::middleware(['admin'])->group(function () {
    Route::get('/profile', [AdminController::class, 'Profile']);
    Route::get('/course', [AdminController::class, 'Courses']);
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/Matiére', [MatiereController::class, 'index'])->name('matieres.index');
    Route::get('/Filiére', [FiliéreController::class, 'index'])->name('filiere.index');
    Route::get('/année_scolaire', [AnneeScolaireController::class, 'index'])->name('annees.index');
    Route::get('/admin', [NiveauxScolaireController::class, 'index'])->name('niveaux.index');
});
