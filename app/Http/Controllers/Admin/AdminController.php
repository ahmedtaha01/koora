<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AMatch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Stadium;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $list_of_stadiums = Auth::user()->stadiums->pluck('id')->toArray();
        $number_of_stadiums = count(Auth::user()->stadiums);
        
        $number_of_players = AMatch::distinct()->whereIn('stadium_id',$list_of_stadiums)->count('user_id');
        // dd($number_of_players);

        

        $whole_profits = AMatch::whereIn('stadium_id',$list_of_stadiums)->sum('money');

        $number_of_matches = AMatch::whereIn('stadium_id',$list_of_stadiums)->count();

        $stadiums = Auth::user()->stadiums;

        $players = AMatch::whereIn('stadium_id',$list_of_stadiums)->pluck('user_id')->toArray();
        $players_info = User::findMany($players);

        $matchs = DB::table('matchs')
        ->join('users','user_id','=','users.id')
        ->join('stadiums','stadium_id','=','stadiums.id')
        ->whereIn('stadium_id',$list_of_stadiums)
        ->get(['stadiums.name as stadium_name','stadiums.size','users.name as user_name','matchs.date','matchs.status'
            ,'matchs.money','matchs.hours']);
        
        
        return view('admin.index',
            [
                'number_of_stadiums'    => $number_of_stadiums,
                'number_of_players'     => $number_of_players,
                'number_of_matches'     => $number_of_matches,
                'whole_profits'         => $whole_profits,
                'stadiums'              => $stadiums,
                'players_info'          => $players_info,
                'matchs'                => $matchs,
            ]
        );
    }

    public function matchList(){
        $list_of_stadiums = Auth::user()->stadiums->pluck('id')->toArray();

        $matchs = DB::table('matchs')
        ->join('users','user_id','=','users.id')
        ->join('stadiums','stadium_id','=','stadiums.id')
        ->whereIn('stadium_id',$list_of_stadiums)
        ->get(['stadiums.name as stadium_name','stadiums.size','users.name as user_name','matchs.date','matchs.status'
            ,'matchs.money','matchs.hours']);

        return view('admin.match-list')->with('matchs',$matchs);
    }

    public function pitchList(){
        
        $stadiums = Stadium::where('user_id',auth()->user()->id)->get();
        return view('admin.pitches-list',compact('stadiums'));
    }

    public function clientList(){
        $list_of_stadiums = Auth::user()->stadiums->pluck('id')->toArray();
        $clients_id = AMatch::whereIn('stadium_id' , $list_of_stadiums)->distinct()->pluck('user_id')->toArray();
        $clients = User::findMany($clients_id);
        return view('admin.clients-list',compact('clients'));
    }

    public function reviews(){
        $list_of_stadiums = Auth::user()->stadiums->pluck('id')->toArray();
        $reviews = DB::table('comments')
        ->join('stadiums','stadiums.id','=','comments.stadium_id')
        ->join('users','users.id','=','comments.user_id')
        ->whereIn('comments.stadium_id',$list_of_stadiums)
        ->get(['users.name as user_name','stadiums.name as stadium_name',
        'comments.comment','comments.created_at']);

        return view('admin.reviews',compact('reviews'));
    }

    public function transaction(){
        $list_of_stadiums = Auth::user()->stadiums->pluck('id')->toArray();

        $transactions = DB::table('matchs')
        ->join('users','users.id','=','matchs.user_id')
        ->whereIn('matchs.stadium_id',$list_of_stadiums)
        ->get(['users.name as user_name','users.code','matchs.id','matchs.money','matchs.status']);

        return view('admin.transactions-list',compact('transactions'));
    }
}
