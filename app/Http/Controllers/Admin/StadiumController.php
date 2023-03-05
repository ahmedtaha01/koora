<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stadium;
use Illuminate\Http\Request;

class StadiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stadiums = Stadium::where('user_id',auth()->user()->id)->get();
        return view('admin.pitches-list',compact('stadiums'));
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
     * @param  \App\Models\Stadium  $stadium
     * @return \Illuminate\Http\Response
     */
    public function show(Stadium $stadium)
    {
        $this->authorize('view',$stadium);
        
        return view('admin.pitch-profile',compact('stadium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stadium  $stadium
     * @return \Illuminate\Http\Response
     */
    public function edit(Stadium $stadium)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stadium  $stadium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stadium $stadium)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stadium  $stadium
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stadium $stadium)
    {
        //
    }
}
