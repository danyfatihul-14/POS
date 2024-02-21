<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\UserController;
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

Route::get('/home',[HomeController::class, 'home']);
Route::prefix('category') -> group(function(){
    Route::get('/food-beverage',[CategoryController::class, 'foodbeverage']);
    Route::get('/beauty-health',[CategoryController::class, 'beautyhealth']);
    Route::get('/home-care',[CategoryController::class, 'homecare']);
    Route::get('/baby-kid',[CategoryController::class, 'babykid']);
});
Route::get('/user/{id}/name/{name}',[UserController::class,'user']);
Route::get('/penjualan', [PenjualanController::class,'index']);