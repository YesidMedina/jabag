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
Route::get('/peluqueria', [App\Http\Controllers\CatalogopeluController::class, 'index'])->name('peluqueria');
Route::get('/barberia', [App\Http\Controllers\CatalogobarberController::class, 'index'])->name('barberia');
Route::get('/cosmetico', [App\Http\Controllers\CatalogocosmeController::class, 'index'])->name('cosmetico');
Route::get('/aseoPersonal', [App\Http\Controllers\CatalogoaseoController::class, 'index'])->name('aseoPersonal');




Route::get('/nosotros', [App\Http\Controllers\NosotrosController::class, 'index'])->name('nosotros');
Route::get('/contacto', [App\Http\Controllers\ContactoController::class, 'index'])->name('contacto');
Auth::routes();

Route::resource('productos', App\Http\Controllers\ProductoController::class)->middleware('auth');
Route::resource('peluquerium', App\Http\Controllers\PeluqueriumController::class)->middleware('auth');
Route::resource('cosmeticos', App\Http\Controllers\CosmeticoController::class)->middleware('auth');
Route::resource('barberium', App\Http\Controllers\BarberiumController::class)->middleware('auth');
Route::resource('aseopersonal', App\Http\Controllers\AseoPersonalController::class)->middleware('auth');
Route::post('/image/save', 'ImageController@save')->name('image.save');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
