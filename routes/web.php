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
Route::get('/pr/pr1',function(){
return view ('prueba');
});

Route::get('/detailproductos/{id?}', [App\Http\Controllers\CatalogoController::class, 'detailproductos'])->name('producto.detailproductos');
Route::get('/detailpeluqueria/{id?}', [App\Http\Controllers\CatalogopeluController::class, 'detailpeluqueria'])->name('peluqueria.detailpeluqueria');
Route::get('/detailaseo/{id?}', [App\Http\Controllers\CatalogoaseoController::class, 'detailaseo'])->name('aseo.detailaseo');
Route::get('/detailbarber/{id?}', [App\Http\Controllers\CatalogobarberController::class, 'detailbarber'])->name('barberia.detailbarber');
Route::get('/detailcosmetico/{id?}', [App\Http\Controllers\CatalogocosmeController::class, 'detailcosmetico'])->name('cosmetico.detailcosmetico');
Route::get('/', [App\Http\Controllers\CatalogoController::class, 'index'])->name('welcome');
Route::get('/peluqueria', [App\Http\Controllers\CatalogopeluController::class, 'index'])->name('peluqueria');
Route::get('/barberia', [App\Http\Controllers\CatalogobarberController::class, 'index'])->name('barberia.index');
Route::post('/barberia', [App\Http\Controllers\CatalogobarberController::class, 'store'])->name('barberia.store');
Route::post('/peluqueria', [App\Http\Controllers\CatalogopeluController::class, 'store'])->name('peluqueria.store');
Route::post('/', [App\Http\Controllers\CatalogoController::class, 'store'])->name('producto.store');
Route::post('/cosmetico', [App\Http\Controllers\CatalogocosmeController::class, 'store'])->name('cosmetico.store');
Route::post('/aseous', [App\Http\Controllers\CatalogoaseoController::class, 'store'])->name('aseo.store');

Route::get('/cosmetico', [App\Http\Controllers\CatalogocosmeController::class, 'index'])->name('cosmetico');
// Route::get('/welcomeshow', [App\Http\Controllers\CatalogoController::class, 'show'])->name('welcomeshow');
// Route::get('/welcomeshow', [App\Http\Controllers\WelcomeshowController::class, 'index'])->name('welcomeshow');
Route::get('/aseous', [App\Http\Controllers\CatalogoaseoController::class, 'index'])->name('aseous');
Route::get('/detail/{id}', [App\Http\Controllers\CatalogobarberController::class, 'detail'])->name('barberia.detail');

Route::get('/nosotros', [App\Http\Controllers\NosotrosController::class, 'index'])->name('nosotros');
Route::get('/contacto', [App\Http\Controllers\ContactoController::class, 'index'])->name('contacto.index');
Route::post('/contacto', [App\Http\Controllers\ContactoController::class, 'store'])->name('contacto.store');
Auth::routes();

Route::resource('productos', App\Http\Controllers\ProductoController::class)->middleware('auth');
Route::resource('peluquerium', App\Http\Controllers\PeluqueriumController::class)->middleware('auth');
Route::resource('cosmeticos', App\Http\Controllers\CosmeticoController::class)->middleware('auth');
Route::resource('barberium', App\Http\Controllers\BarberiumController::class)->middleware('auth');
// Route::get('register', App\Http\Controllers\Auth\RegisterController::class)->name('register');

Route::resource('aseo', App\Http\Controllers\AseoController::class)->middleware('auth');
Route::post('/image/save', 'ImageController@save')->name('image.save');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/producto', [App\Http\Controllers\ProductoController::class, 'edit'])->name('producto.edit');
Route::put('/producto', [App\Http\Controllers\ProductoController::class, 'update'])->name('producto.update');
