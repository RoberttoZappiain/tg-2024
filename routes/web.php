<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuienesSomosController;
use App\Http\Controllers\CcadController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\MultimediaController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ProteccionController;
use App\Http\Controllers\RespaldoRegulacionController;
use App\Http\Controllers\GeneralController;

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
//     return view('welcome');
// });
Route::get('/navbar', [NavbarController::class, 'show']);
Route::get('/proteccion/{categoria_slug}', [ProteccionController::class, 'index'])->name('proteccion.index');
// Ruta para mostrar productos de una subcategoría específica dentro de una categoría
Route::get('/proteccion/{categoria_slug}/{subcategoria_slug}', [ProteccionController::class, 'subcategoria'])->name('proteccion.subcategoria');
// Ruta para mostrar detalles de un producto específico
Route::get('/proteccion/{categoria_slug}/{subcategoria_slug}/{slug}', [ProteccionController::class, 'show'])->name('proteccion.show');

Route::get('/proteccion/sistemas-tierra-fisica', [CategoryController::class, 'index'])->name('categorias.index');
Route::get('/', [HomeController::class, 'show'])->name('home.show');
Route::get('/nosotros', [QuienesSomosController::class, 'show'])->name('quienes-somos.show');
// Ruta más específica primero
Route::get('/familias/{categoria_slug}/{subcategoria_slug}/{slug}', [GeneralController::class, 'show'])->name('familias.show');
// Ruta con dos segmentos en segundo lugar
Route::get('/familias/{categoria_slug}/{subcategoria_slug}', [GeneralController::class, 'showSubcategoria'])->name('familias.showSubcategoria');// Ruta más general al final
Route::get('/familias/{slug}', [GeneralController::class, 'showFamilia'])->name('familias.showFamilia');
Route::get('/carousel', [CategoryController::class, 'showCarousel'])->name('carousel.show');
Route::get('/CCAD', [CcadController::class, 'show'])->name('CCAD.show');
Route::get('/Eventos', [EventosController::class, 'show'])->name('Eventos.show');
Route::get('/Multimedia', [MultimediaController::class, 'show'])->name('Multimedia.show');
// Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
// Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::get('/servicios/levantamientos', [ServiciosController::class, 'levantamientos']);

Route::get('/pararrayos', [App\Http\Controllers\CategoryController::class, 'indexPararrayos'])->name('pararrayos.index');

// Rutas específicas para Respaldo y Regulación
Route::get('/respaldo-regulacion-ups', [RespaldoRegulacionController::class, 'indexUps'])->name('respaldo_regulacion.ups.index');
Route::get('/respaldo-regulacion-ups/{slug}', [RespaldoRegulacionController::class, 'showUps'])->name('respaldo_regulacion.ups.show');

Route::get('/respaldo-regulacion-reguladores', [RespaldoRegulacionController::class, 'indexReguladores'])->name('respaldo_regulacion.reguladores.index');
Route::get('/respaldo-regulacion-reguladores/{slug}', [RespaldoRegulacionController::class, 'showReguladores'])->name('respaldo_regulacion.reguladores.show');

Route::get('/{table}', [GeneralController::class, 'index'])->name('general.index');
Route::get('/{table}/{slug}', [GeneralController::class, 'show'])->name('general.show');

// // Rutas genéricas para CategoryController
// Route::get('/{table}/{categoria}', [CategoryController::class, 'show'])->name('categoria.show');
// Route::get('/{table}/{categoria}/{nombre_kit}', [CategoryController::class, 'kitDetail'])->name('kit.detail');
