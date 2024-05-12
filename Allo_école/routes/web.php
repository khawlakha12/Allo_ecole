<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\userController;
use App\Http\Controllers\NiveauxScolaireController;

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



Route::get('/admin', function () {
        return view('Admin.dashboard');
})->name('Dashboard');

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

Route::post('/admin', [NiveauxScolaireController::class, 'store'])->name('niveaux.store');

Route::get('/education', function(){
    return view('pages.education');
});

//----------------------------Authentification----------------------------//
Route::post('/register', [AuthController::class, 'register']);
Route::get('/register', function () {
    return view('Auth.register');
});
Route::post('/login', [AuthController::class, 'login']);

//----------------------------Middlware----------------------------//
Route::get('/admin', function() {
    return view('admin.dashboard');  
})->middleware(['auth', 'can:isAdmin']); 

Route::get('/profile', [userController::class, 'userlogged'])->name('profile')->middleware('auth');