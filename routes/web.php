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

Auth::routes();

Route::resource('lista', App\Http\Controllers\listumController::class)->middleware('auth');
Route::resource('datos', App\Http\Controllers\DatoController::class)->middleware('auth');
Route::resource('posos', App\Http\Controllers\PosoController::class)->middleware('auth');
Route::resource('admin', App\Http\Controllers\HomeController::class)->middleware('auth');


