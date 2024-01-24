<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->name('todo')->prefix('/todo')->group(function () {

    Route::resource('list', \App\Http\Controllers\TodoListController::class)
        ->only(['index', 'store', 'show', 'update', 'destroy']);

    Route::get('/list/{list_id}/tasks', [\App\Http\Controllers\TodoTaskController::class, 'index'])
        ->name('task.index');

    Route::resource('task', \App\Http\Controllers\TodoTaskController::class)
        ->only(['store', 'update', 'destroy']);

});

Route::middleware('guest')->name('auth.')->prefix('/auth')->group(function () {
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
    Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
});
