<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_of_stadiums = Auth::user()->stadiums->pluck('id')->toArray();

        $reservations = DB::table('matchs')
        ->join('users','user_id','=','users.id')
        ->join('stadiums','stadium_id','=','stadiums.id')
        ->whereIn('stadium_id',$list_of_stadiums)->where('deleted_at',null)
        ->get(['stadiums.name as stadium_name','stadiums.image as stadium_image',
            'users.name as user_name','users.image as user_image',
            'matchs.date','matchs.status','matchs.code as match_code'
            ,'matchs.money','matchs.hours','matchs.id','matchs.stadium_id']);

        return view('admin.reservations')->with('reservations',$reservations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = DB::table('matchs')
        ->join('users','user_id','=','users.id')
        ->join('stadiums','stadium_id','=','stadiums.id')
        ->where('matchs.id',$id)->where('delete_at',null)
        ->first(['stadiums.name as stadium_name','stadiums.address','stadiums.hour_price',
        'users.name as user_name','users.email','users.phone',
        'matchs.hours','matchs.money','matchs.code','matchs.created_at','matchs.hours']);

        return view('admin.invoice',compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Reservation $reservation)
    {
        return 10;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        // $this->authorize('delete',$reservation);
        Reservation::destroy($reservation->id);
    }
}
