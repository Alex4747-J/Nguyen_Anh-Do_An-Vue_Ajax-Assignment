<?php

use App\Http\Controllers\AbilityController;
use App\Http\Controllers\AgentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/**
 * Agent API Routes
 */

Route::get('/agents', [AgentController::class, 'index']);
Route::post('/agents', [AgentController::class, 'store']);
Route::get('/agents/{agent}', [AgentController::class, 'show']);
Route::patch('/agents/{agent}', [AgentController::class, 'update']);
Route::delete('/agents/{agent}', [AgentController::class, 'destroy']);

/**
 * Ability API Routes
 */

Route::get('/abilities', [AbilityController::class, 'index']);
Route::post('/abilities', [AbilityController::class, 'store']);
Route::get('/abilities/{ability}', [AbilityController::class, 'show']);
Route::patch('/abilities/{ability}', [AbilityController::class, 'update']);
Route::delete('/abilities/{ability}', [AbilityController::class, 'destroy']);