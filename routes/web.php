<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/register')->name('register')->group(function(){
    Route::get('',[RegisterController::class,'index']);

    Route::post('',[RegisterController::class,'store']);
});

Route::prefix('/login')->name('login')->group(function(){
    Route::get('',[LoginController::class,'index']);

    Route::post('',[LoginController::class,'login']);
});


