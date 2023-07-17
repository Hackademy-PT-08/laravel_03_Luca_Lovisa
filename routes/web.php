<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
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

Route::get('/',[PublicController::class,'index'])->name('homepage');
Route::get('/ricette/dettaglio-ricetta/{id}',[PublicController::class,'show'])->name('dettaglio.ricetta');
Route::get('/ricette/tipo/{type}',[PublicController::class,'type'])->name('tipo.ricetta');