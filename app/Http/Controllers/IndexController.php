<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{
    public function index(){
        $stadiums = DB::table('stadiums')->get();
        return view('welcome',compact('stadiums'));
    }

    public function pitch(){
        return view('pitch-profile');
    }

    public function pitch_list(){
        $stadiums = DB::table('stadiums')->paginate(5);
        return view('pitches-list',compact('stadiums'));
    }
}
