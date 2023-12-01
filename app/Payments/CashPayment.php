<?php

namespace App\Payments;
use App\Models\Reservation;

class CashPayment implements PaymentInterface {

    public function pay($data){
        $reservation_id = Reservation::create([
            'user_id'           => auth()->user()->id,
            'stadium_id'        => $data['stadium']->id,
            'date'              => $data['dateTime'],
            'hours'             => '1',
            'status'            => '0',
            'code'              => mt_rand(1000000,9999999),
            'money'             => $data['stadium']->hour_price,
        ]);

        $data2 = [
            'stadium'           => $data['stadium'],
            'day'               => $data['day'],
            'time'              => $data['time'],
        ];


        return view('user.reservation-success',compact('data'));
    }
} 

