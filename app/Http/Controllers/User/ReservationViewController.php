<?php

namespace App\Http\Controllers\User;

use Exception;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\ReservationRequest;
use App\Models\Reservation;
use App\Models\Stadium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stripe\StripeClient;
use Stripe\Exception\CardException;

class ReservationViewController extends Controller
{
    public function chooseDate(Stadium $stadium){
        return view('user.reservation-date',compact('stadium'));
    }

    public function choosePayment(ReservationRequest $request){
        $data = [
            'stadium'   => Stadium::find($request->stadium),
            'day'       => $request->day,
            'time'      => $request->time,
        ];
        return view('user.reservation-checkout',compact('data'));
    }

}
