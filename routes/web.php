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
    return view('home');
});

Route::get('/registratia', function () {
    return view('registratia');
});

Route::get('/header', function () {
    return view('header');
});

Route::get('/gotovo_zayavki', function () {
    return view('gotovo_zayavki');
});

Route::get('/zayavki', function () {
    return view('zayavki');
});

Route::get('/for_header', function () {
    return view('for_header');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/vxod', function () {
    return view('vxod');
});

Route::get('/kategoria', function () {
    return view('kategoria');
});





