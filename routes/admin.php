<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\ReservationUpdateStatusController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\StadiumController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
    Route::get('dashboard',DashboardController::class)->name('dashboard');

    Route::resource('reservations',ReservationController::class);
    Route::get('reservationUpdateService/{id}',ReservationUpdateStatusController::class);

    Route::resource('stadiums',StadiumController::class);

    Route::resource('clients',ClientController::class);

    Route::resource('reviews',ReviewController::class);

    Route::put('profile/update_password',[ProfileController::class,'update_password'])->name('profile.update_password');
    Route::put('profile',[ProfileController::class,'update'])->name('profile.update');
    Route::resource('profile',ProfileController::class)->except('update');
});



