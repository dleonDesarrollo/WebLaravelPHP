<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('index');
});

Route::get('/portafolio', function () {
    return view('index');
});

Route::get('/acerca', function () {
    return view('about');
});

Route::get('/contacto', function () {
    return view('contact');
});