<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgetpasswordController;
use App\Http\Controllers\Auth\PasswordController;

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


Route::prefix('admin')->namespace('admin')->name('admin')->middleware(['auth','is_admin'])->group(function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('.dashboard');

    Route::get('match_list',[AdminController::class,'matchList'])->name('.match_list');

    Route::get('pitch_list',[AdminController::class,'pitchList'])->name('.pitch_list');

    Route::get('client_list',[AdminController::class,'clientList'])->name('.client_list');

    Route::get('reviews',[AdminController::class,'reviews'])->name('.reviews');

    Route::get('transactions',[AdminController::class,'transaction'])->name('.transactions');
});



