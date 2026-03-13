<?php

use App\Http\Controllers\Api\AssessmentController;
use App\Http\Controllers\Api\HazardController;
use Illuminate\Support\Facades\Route;

Route::get('/assessments', [AssessmentController::class, 'index']);
Route::get('/assessments/{assessment}', [AssessmentController::class, 'show']);
Route::put('/assessments/{assessment}', [AssessmentController::class, 'update']);

Route::get('/assessments/{assessment}/hazards', [HazardController::class, 'index']);
Route::post('{assessment}/hazards', [HazardController::class, 'store']);
Route::delete('/hazards/{hazard}', [HazardController::class, 'destroy']);
Route::put('hazards/{hazard}', [HazardController::class, 'update']);
