<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\CatalogoController::class, 'index'])->name('welcome');
Route::get('/nosotros', [App\Http\Controllers\NosotrosController::class, 'index'])->name('nosotros');
Route::get('/contacto', [App\Http\Controllers\ContactoController::class, 'index'])->name('contacto');
Auth::routes();

Route::resource('productos', App\Http\Controllers\ProductoController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');