<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('Admin.team');
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
Route::get('/profile', function () {
    return view('Admin.profile');
});


Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/register', function () {
    return view('Auth.register');
});
Route::post('/sign_in', [AuthController::class, 'login'])->name('login');
Route::get('/sign_in', function () {
    return view('Auth.sign-in');
})->name('login');