<?php

use App\Http\Controllers\ProductoController;
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


Route::get('/', function () {
    return view('dashboard.index');
});



Route::prefix('pagina')->group(function () {
    Route::get('index', [ProductoController::class, 'index']);
    Route::get('form', [ProductoController::class, 'create']);

    Route::post('crearProducto', [ProductoController::class, 'store']);
    Route::delete('eliminarProducto/{$id}', [ProductoController::class, 'destroy']);
});
