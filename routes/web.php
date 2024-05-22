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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil', function(){
    return view('index');
});

Route::get('/dossiers', function(){
    return view('dossier');
});

Route::get('/examens', function(){
    return view('examen');
});

Route::get('/consultations', function(){
    return view('consultation');
});

Route::get('/specialistes', function(){
    return view('specialiste');
});
