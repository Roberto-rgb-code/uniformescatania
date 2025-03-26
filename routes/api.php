<?php

use App\Http\Controllers\UniformeController;
use Illuminate\Support\Facades\Route;

Route::get('/uniformes', [UniformeController::class, 'apiIndex']);
Route::get('/uniformes/{id}', [UniformeController::class, 'apiShow']);