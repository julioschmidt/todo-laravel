<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);
Route::middleware('auth:sanctum')->post('logout', [LoginController::class, 'logout']);
/* Route::post('/login', 'App\Http\Controllers\AuthController@login'); */
Route::get('/todos', 'App\Http\Controllers\TodosController@index');
Route::post('/todos', 'App\Http\Controllers\TodosController@store');
Route::patch('/todos/{todo}', 'App\Http\Controllers\TodosController@update');
Route::patch('/todosCheckAll', 'App\Http\Controllers\TodosController@updateAll');
Route::delete('/todos/{todo}', 'App\Http\Controllers\TodosController@destroy');
Route::delete('/todosDeleteCompleted', 'App\Http\Controllers\TodosController@destroyCompleted');
