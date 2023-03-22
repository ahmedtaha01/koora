<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $reservations = DB::table('matchs')
        ->join('stadiums','matchs.stadium_id','=','stadiums.id')
        ->join('users','matchs.user_id','=','users.id')
        
        ->where('users.id',auth()->user()->id)
        ->get(['stadiums.name as stadium_name','stadiums.image','stadiums.size',
               'matchs.date','matchs.hours','matchs.money','matchs.status','matchs.id']);

        $data = [
            'reservations'      => $reservations
        ];
        return view('user.client-dashboard',compact('data'));
    }
}
