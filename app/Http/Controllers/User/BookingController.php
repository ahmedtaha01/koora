<?php

namespace App\Http\Controllers\User;

use App\Models\Stadium;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Carbon\Carbon;
use DateTime;

class BookingController extends Controller
{
    private Stadium $stadium;
    private $dateTime;
    private $time;
    

    public function book(Request $request){
        
        if(! $this->alreadyExistBooking($request)){
            
            $payment = 'App\Payments\\'.$request->payment.'Payment';
            $data = [
                'stadium'           => $this->stadium,
                'dateTime'          => $this->dateTime,
                'payment_method'    => $request->payment_method,
                'email'             => $request->email,
                'day'               => $request->day,
                'time'              => $this->time,
                'payment_gateway'   => $request->payment,
            ];

            return (new $payment)->pay($data);
            

            
        }
        return redirect()->route('user.reservation_date',$this->stadium->id)->with('failed','reservation date is taken');
    }



    private function alreadyExistBooking($request){
        $this->stadium = Stadium::find($request->stadium);
        $date = date("Y-m-d", strtotime($request->day));
        $this->time = substr($request->time, 0, -2);
        $this->dateTime = $date.' '.substr($request->time, 0, -2);

        return Reservation::where([
            ['stadium_id','=',$this->stadium->id],
            ['date','=',$this->dateTime],
            ])->first();
    }
}
