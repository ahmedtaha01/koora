<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LockController extends Controller
{
    public function lockscreen(){
        Session::put('lockscreen',true);
        return view('admin.lock-screen');
    }
    
    public function unlock(Request $request){
        if(Hash::check($request->password,auth()->user()->password)){
            session()->forget('lockscreen');
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with('error','incorrect password');
    }
}
