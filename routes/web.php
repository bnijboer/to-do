<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/',             [TaskController::class, 'index']);
Route::get('/create',       [TaskController::class, 'create']);
Route::post('/',            [TaskController::class, 'store']);
Route::get('/{task}',       [TaskController::class, 'show']);
Route::get('/{task}/edit',  [TaskController::class, 'edit']);
Route::put('/{task}',       [TaskController::class, 'update']);
Route::delete('/{task}',    [TaskController::class, 'destroy']);
Route::post('/{task}',      [TaskController::class, 'check']);