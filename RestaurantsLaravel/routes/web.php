<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/restaurants/create',[RestaurantController::class,'create']);

Route::post('restaurants/create',[RestaurantController::class,'store']);

Route::get('/restaurants/{restaurant}',[RestaurantController::class,'show']);

Route::get('/restaurants', [RestaurantController::class, 'index']);

Route::delete('restaurants/delete/{restaurant}',[RestaurantController::class,'destroy']);

Route::get('/restaurants/edit/{restaurant}', [RestaurantController::class,'edit']);

Route::patch('/restaurants/edit/{restaurant}', [RestaurantController::class,'update']);



