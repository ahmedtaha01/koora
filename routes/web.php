<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgetpasswordController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\User\MatchController;

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

Route::get('/',[IndexController::class,'index'])->middleware('guest')->name('index');

Route::get('/pitchs_list',[IndexController::class,'pitch_list'])->name('pitch_list');

Route::resource('stadium',StadiumController::class);

Route::get('/match',[MatchController::class,'index'])->name('match');

Route::get('/logout',[LogoutController::class,'logout'])->middleware('auth')->name('logout');

Route::prefix('/register')->middleware('guest')->name('register')->group(function(){
    Route::get('',[RegisterController::class,'index']);

    Route::post('',[RegisterController::class,'store']);
});

Route::prefix('/login')->middleware('guest')->name('login')->group(function(){
    Route::get('',[LoginController::class,'index']);

    Route::post('',[LoginController::class,'login']);

    Route::get('/forget_password',[ForgetpasswordController::class,'index'])->name('.forget_password');

    Route::post('/forget_password',[ForgetpasswordController::class,'checkEmail'])->name('.forget_password');

    Route::middleware('forget_password')->group(function(){
        Route::get('/send_code',[ForgetpasswordController::class,'sendCode'])->name('.send_code');

        Route::post('/send_code',[ForgetpasswordController::class,'checkCode'])->name('.send_code');
    
        Route::get('/update_password',[PasswordController::class,'index'])->name('.update_password');
    
        Route::post('/update_password',[PasswordController::class,'updatePassword'])->name('.update_password');
    });
});


