<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('/404', function () {
    return view('Admin.404');
});
Route::get('/formateur', function () {
    return view('Admin.team');
});
Route::get('/formateur', function () {
    return view('Admin.team');
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

