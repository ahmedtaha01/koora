<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ReservationRequest;
use App\Models\Reservation;
use App\Models\Stadium;
use Illuminate\Http\Request;

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

    public function success(Request $request){
        $stadium = Stadium::find($request->stadium);

        $date = date("Y-m-d", strtotime($request->day));
        $time = substr($request->time, 0, -2);
        $dateTime = $date.' '.substr($request->time, 0, -2);
        $already_exist = Reservation::where([
            ['stadium_id','=',$stadium->id],
            ['date','=',$dateTime],
            ])->first();
        if(! $already_exist){
            $reservation_id = Reservation::create([
                'user_id'           => auth()->user()->id,
                'stadium_id'        => $stadium->id,
                'date'              => $dateTime,
                'hours'             => '1',
                'status'            => '1',
                'code'              => mt_rand(1000000,9999999),
                'money'             => $stadium->hour_price,
            ]);
            $data = [
                'stadium'           => Stadium::find($request->stadium),
                'day'               => $request->day,
                'time'              => $time,
                'reservation_id'    => $reservation_id,
            ];
            return view('user.reservation-success',compact('data'));
        }
        return redirect()->route('user.reservation_date',$stadium->id)->with('failed','reservation date is taken');
    }
}
