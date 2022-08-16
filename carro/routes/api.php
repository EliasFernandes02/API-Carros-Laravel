<?php


use App\Http\Controllers\CarroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/carro', [CarroController::class, 'getList']);
Route::get('/carro/{id}', [CarroController::class, 'getOne']);
Route::post('/carro', [CarroController::class, 'post']);
Route::patch('/carro/{id}', [CarroController::class, 'patch']);
Route::delete('/carro/{id}', [CarroController::class, 'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
