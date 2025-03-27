<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('registration', [AuthController::class, 'register']);
Route::get('profile/{id}', [AuthController::class, 'profile']);
