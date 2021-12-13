<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishesController;

Route::GET('/', [DishesController::class, 'index']);
Route::GET('/delete', [DishesController::class, 'delete']);
Route::POST('/create', [DishesController::class, 'create']);
Route::POST('/update', [DishesController::class, 'update']);