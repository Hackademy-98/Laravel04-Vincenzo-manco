<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VikingsController;
use App\Http\Controllers\vikingsValhallaController;

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
})->name('home');

// Rotta per vikings

Route::get('/seasons',[VikingsController::class , 'index'] )->name('index.vikings');

// Rotta per valhalla

Route::get('/seasonsValhalla',[vikingsValhallaController::class , 'index'] )->name('index.vikingValhalla');

// rotta della pagina al dettaglio di vikings

Route::get('/vikings/detail/{name}' ,[VikingsController::class , 'show'] )->name('show.vikings');

// rotta pagina al dettaglio Valhalla
Route::get('/valhalla/detail/{name}' ,[vikingsValhallaController::class , 'show'] )->name('show.valhalla');