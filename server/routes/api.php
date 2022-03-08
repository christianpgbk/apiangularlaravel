<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// obtener todos los clientes
Route::get(
    'clientes',
    [ClienteController::class, 'showAll']
);
// obtener cliente por id
Route::get(
    'clientes/{id}',
    [ClienteController::class, 'show']
);
//agregar cliente

Route::post(
    'agregar_clientes',
    [ClienteController::class, 'add']
);
// actualizar cliente
Route::put(
    'actualizar_clientes/{id}',
    [ClienteController::class, 'update']
);

//eliminar cliente
Route::delete(
    'eliminar_clientes/{id}',
    [ClienteController::class, 'delete']
);