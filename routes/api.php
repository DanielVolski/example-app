<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::prefix('users')->group(function () {
    Route::get('/', [UsersController::class, 'getUsers']);
    Route::post('/', [UsersController::class, 'createUser']);
    Route::put('/{id}', [UsersController::class, 'updateUser']);
    Route::delete('/{id}', [UsersController::class, 'deleteUser']);
});

Route::prefix('/products')->group(function () {
    Route::get('/', [UsersController::class, 'getUsers']);
    Route::post('/', [UsersController::class, 'createUser']);
    Route::put('/{id}', [UsersController::class, 'updateUser']);
    Route::delete('/{id}', [UsersController::class, 'deleteUser']);
});
