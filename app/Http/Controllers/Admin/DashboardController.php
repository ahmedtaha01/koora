<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $list_of_stadiums = Auth::user()->stadiums->pluck('id')->toArray();
        $number_of_stadiums = count(Auth::user()->stadiums);
        
        $number_of_players = Reservation::distinct()->whereIn('stadium_id',$list_of_stadiums)->count('user_id');
        // dd($number_of_players);

        $whole_profits = Reservation::whereIn('stadium_id',$list_of_stadiums)->sum('money');

        $number_of_matches = Reservation::whereIn('stadium_id',$list_of_stadiums)->count();

        $stadiums = Auth::user()->stadiums;

        $players = Reservation::whereIn('stadium_id',$list_of_stadiums)->pluck('user_id')->toArray();
        $players_info = User::findMany($players);

        $reservations = DB::table('matchs')
        ->join('users','user_id','=','users.id')
        ->join('stadiums','stadium_id','=','stadiums.id')
        ->whereIn('stadium_id',$list_of_stadiums)->where('deleted_at',null)
        ->get(['stadiums.name as stadium_name','stadiums.size','stadiums.id as stadium_id',
        'stadiums.image as stadium_image',
        'users.name as user_name',
        'matchs.date','matchs.status','matchs.money','matchs.hours','matchs.id']);
        
        
        return view('admin.index',
            [
                'number_of_stadiums'    => $number_of_stadiums,
                'number_of_players'     => $number_of_players,
                'number_of_matches'     => $number_of_matches,
                'whole_profits'         => $whole_profits,
                'stadiums'              => $stadiums,
                'players_info'          => $players_info,
                'reservations'          => $reservations,
            ]
        );
    }
}
