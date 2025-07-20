<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\PriorityController;
use App\Http\Controllers\Api\AuthController;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
     Route::get('/user', function (Request $request) {
        return $request->user();
    });

Route::get('tasks', [TaskController::class, 'index']);
Route::get('priorities', [PriorityController::class, 'index']);
Route::get('tasks/{id}', [TaskController::class, 'show']);
Route::post('tasks', [TaskController::class, 'store']);
Route::put('tasks/{id}', [TaskController::class, 'update']);
Route::delete('tasks/{id}', [TaskController::class, 'destroy']);
});