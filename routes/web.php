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
});

Route::get('/nosotros', function () {
    return view('nosotros.index');
});

Route::get('/map', function () {
    return view('map.index');
});

Route::resource('articulo', ArticuloController::class);

Route::resource('persona', PersonaController::class);

Route::resource('almacen', AlmacenController::class);

Route::resource('country', CountryController::class);

Route::resource('proveedor', ProveedorController::class);

Route::resource('categoria', CategoriaController::class, ['parameters' => [
    'categoria' => 'categoria'
]]);

Route::resource('ingreso', IngresoController::class);

Route::resource('salida', SalidaController::class);