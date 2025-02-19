<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MathController;

// Ito ang ruta kung saan ay pinanhahawakan niya multiplication at addition operations
Route::get('/multiply/{num1}/{num2}/add/{num3}/{num4}', [MathController::class, 'compute']);

Route::get('/', function () {
    return view('welcome');
});
