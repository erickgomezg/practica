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
// Route::get('/', function () {
//     return view('welcome', [ 'title' => 'Proyecto']);
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Botones
Route::get('/Calculadora', [App\Http\Controllers\Calculadora::class, 'index'])->name('Calculadora');
// Route::get('/organizador', [App\Http\Controllers\HomeController::class, 'index'])->name('organizador');
// Route::get('/directory', [App\Http\Controllers\HomeController::class, 'index'])->name('directory');
// Route::get('/tieda', [App\Http\Controllers\HomeController::class, 'index'])->name('tieda');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
