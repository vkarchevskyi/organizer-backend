<?php

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->name('todo')->prefix('/todo')->group(function () {

    Route::resource('list', \App\Http\Controllers\TodoListController::class)
        ->only(['index', 'store', 'show', 'update', 'destroy']);

    Route::get('/list/{list_id}/tasks', [\App\Http\Controllers\TodoTaskController::class, 'index'])
        ->name('task.index');

    Route::resource('task', \App\Http\Controllers\TodoTaskController::class)
        ->only(['store', 'update', 'destroy']);

});
