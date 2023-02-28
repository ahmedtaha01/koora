<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\ReservationUpdateStatusController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\StadiumController;
use App\Http\Controllers\Admin\TransactionController;
use Illuminate\Support\Facades\Route;


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


Route::prefix('admin')->name('admin.')->middleware(['auth','is_admin'])->group(function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('dashboard');

    Route::resource('reservations',ReservationController::class);
    Route::get('reservationUpdateService/{id}',ReservationUpdateStatusController::class);

    Route::resource('stadiums',StadiumController::class);

    Route::resource('clients',ClientController::class);

    Route::resource('reviews',ReviewController::class);

    Route::resource('transactions',TransactionController::class);
});



