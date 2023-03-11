<?php

namespace App\Http\Controllers;

use App\Models\Stadium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{
    public function index(){
        $stadiums = DB::table('stadiums')->get();
        return view('index.welcome',compact('stadiums'));
    }

    public function pitch(){
        return view('index.pitch-profile');
    }

    public function pitch_list(){
        $stadiums = Stadium::paginate(5);
        return view('index.pitches-list',compact('stadiums'));
    }
}
