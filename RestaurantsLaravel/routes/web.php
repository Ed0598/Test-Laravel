<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/hello/{name}',function(){
    return view('hello',compact('name'));
});

Route::get('/restaurants/create',function(){
    return view('restaurants.create');
});

Route::get('/restaurant/show/{id}', function ($id) {
    return view('restaurants.show', ['id' => $id]);
});

Route::get('/restaurants', [RestaurantController::class, 'index']);
    return view('restaurants.index');
