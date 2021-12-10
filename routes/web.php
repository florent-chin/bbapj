<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishesController;

Route::get('/', [DishesController::class, 'index']);
Route::POST('/create', [DishesController::class, 'create']);
Route::get('/delete', [DishesController::class, 'delete']);
Route::POST('/update', [DishesController::class, 'update']);