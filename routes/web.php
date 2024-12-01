<?php

use App\Http\Controllers\GestionCotizacionController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CotizacionesController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\UsuarioController;

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
    return view('dashboard.index');
});

Route::prefix('inicio')->group(function () {
    Route::get('index/{id}', [GestionCotizacionController::class, 'index']);
    
});


Route::prefix('pagina')->group(function () {
    Route::get('index', [ProductoController::class, 'index']);
    Route::get('form', [ProductoController::class, 'create']);
    Route::get('actualizarProducto/{id}/edit', [ProductoController::class, 'edit']);
    Route::post('crearProducto', [ProductoController::class, 'store']);
    Route::put('actualizarProducto/{id}', [ProductoController::class, 'update']);
    Route::delete('eliminarProducto/{id}', [ProductoController::class, 'destroy']);
});
Route::prefix('cliente')->group(function () {
    Route::get('index', [ClientesController::class, 'index']);
    Route::get('form', [ClientesController::class, 'create']);
    Route::get('actualizarCliente/{id}/edit', [ClientesController::class, 'edit']);
    Route::post('crearCliente', [ClientesController::class, 'store']);
    Route::put('actualizarCliente/{id}', [ClientesController::class, 'update']);
    Route::delete('eliminarCliente/{id}', [ClientesController::class, 'destroy']);
});
Route::prefix('cotizaciones')->group(function () {
    Route::get('index', [CotizacionesController::class, 'index']);
    Route::get('form', [CotizacionesController::class, 'create']);
    Route::get('actualizarCotizacion/{id}/edit', [CotizacionesController::class, 'edit']);
    Route::post('crearCotizacion', [CotizacionesController::class, 'store']);
    Route::put('actualizarCotizacion/{id}', [CotizacionesController::class, 'update']);
    Route::delete('eliminarCotizacion/{id}', [CotizacionesController::class, 'destroy']);
});
Route::prefix('proveedores')->group(function () {
    Route::get('index', [ProveedorController::class, 'index']);
    Route::get('form', [ProveedorController::class, 'create']);
    Route::get('actualizarProveedor/{id}/edit', [ProveedorController::class, 'edit']);
    Route::post('crearProveedor', [ProveedorController::class, 'store']);
    Route::put('actualizarProveedor/{id}', [ProveedorController::class, 'update']);
    Route::delete('eliminarProveedor/{id}', [ProveedorController::class, 'destroy']);
});
Route::prefix('usuarios')->group(function () {
    Route::get('index', [UsuarioController::class, 'index']);
    Route::get('form', [UsuarioController::class, 'create']);
    Route::get('actualizarUsuario/{id}/edit', [UsuarioController::class, 'edit']);
    Route::post('crearUsuario', [UsuarioController::class, 'store']);
    Route::put('actualizarUsuario/{id}', [UsuarioController::class, 'update']);
    Route::delete('eliminarUsuario/{id}', [UsuarioController::class, 'destroy']);
});
