<?php

use App\Controllers\PublicController;
use App\Route;

Route::get('/', [PublicController::class, 'index']);

Route::get('/us', [PublicController::class, 'us']);

Route::get('/technology', [PublicController::class, 'technology']);

Route::get('/test', [PublicController::class, 'test']);

Route::get('/form', [PublicController::class, 'form']);
Route::post('/form', [PublicController::class, 'answer']);
?>
