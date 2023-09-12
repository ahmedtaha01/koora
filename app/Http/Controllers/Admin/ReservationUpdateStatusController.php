<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationUpdateStatusController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request,$id)
    {
       $reservation = Reservation::find($id);
       if($reservation->status == '1'){
            $reservation->update(['status' => '0']);
       } else {
            $reservation->update(['status' => '1']);
       }
    }
}
