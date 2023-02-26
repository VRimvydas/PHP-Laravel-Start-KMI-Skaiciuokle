<?php

use App\Http\Controllers\KmiController;
use App\Http\Controllers\SkaiciuokleController;
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



Route::get('/pvm', [SkaiciuokleController::class,'forma'])->name("forma");
Route::post('/pvm/rezultatas', [SkaiciuokleController::class,'rezultatas'])->name("rezultatas");

Route::get('/kmi', [KmiController::class,'kmi'])->name("kmi");
Route::post('/kmiRez', [KmiController::class,'kmiRezultatas'])->name("kmiRezultatas");


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
