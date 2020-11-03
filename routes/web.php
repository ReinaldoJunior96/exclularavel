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
    return view('index');
})->name('home');

Route::get('/direito', function () {
    return view('direito');
})->name('quem.tem.direito');

Route::get('/servicos', function () {
    return view('servicos');
})->name('servicos.oferecidos');
Route::get('/quemsomos', function () {
    return view('quemsomos');
})->name('quem.somos');






Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});


