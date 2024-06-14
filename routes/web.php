<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home']);

Route::get('/button', [MainController::class, 'button']);
Route::get('/input', [MainController::class, 'input']);
Route::get('/pagination', [MainController::class, 'pagination']);
Route::get('/table', [MainController::class, 'table']);
Route::get('/navbar', [MainController::class, 'navbar']);

Route::get('/kirim', [MainController::class, 'kirim']);
