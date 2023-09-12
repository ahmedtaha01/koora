<?php

use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\User\BookingController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\ReservationViewController;
use App\Http\Controllers\User\StadiumController;
use App\Http\Controllers\User\InvoiceController;
use App\Http\Controllers\User\ProfilePassworController;
use App\Http\Controllers\User\ReviewController;
use App\Payments\PaypalPayment;
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

Route::prefix('user')->name('user.')->middleware(['auth',])->group(function(){
    Route::get('index',IndexController::class)->name('index');

    Route::resource('stadiums',StadiumController::class);

    Route::resource('reviews',ReviewController::class);

    Route::get('reservation_date/{stadium}',[ReservationViewController::class,'chooseDate'])->name('reservation_date');

    Route::get('reservation_date',[ReservationViewController::class,'choosePayment'])->name('choose_payment');

    Route::get('reservation_checkout',[ReservationViewController::class,'ReservationViewController@choosePayment'])->name('choose_checkout');

    Route::post('booking',[BookingController::class,'book'])->name('booking');

    Route::get('profile_settings',[ProfileController::class,'index'])->name('profile_settings');

    Route::post('update_profile',[ProfileController::class,'update'])->name('update_profile');

    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::get('invoice/{reservation}',[InvoiceController::class,'index'])->name('invoice');

    Route::get('update_password',[ProfilePassworController::class,'index'])->name('update_password');

    Route::post('update_password',[ProfilePassworController::class,'update'])->name('update_password');

    Route::prefix('paypal')->name('paypal')->group(function(){
        Route::get('success',[PaypalPayment::class,'success'])->name('.success');
        Route::get('cancel',[PaypalPayment::class,'cancel'])->name('.cancel');
    });

});





