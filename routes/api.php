<?php

use App\Http\Controllers\IncidentController;

Route::get('/incidents', [IncidentController::class,'index']);
Route::post('/incidents', [IncidentController::class,'store']);
Route::get('/incidents/{id}', [IncidentController::class,'show']);
Route::put('/incidents/{id}', [IncidentController::class,'update']);
Route::delete('/incidents/{id}', [IncidentController::class,'destroy']);
