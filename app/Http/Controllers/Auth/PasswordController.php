<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function index(){
        return view('registration.forget_password.new_password');
    }

    public function updatePassword(Request $request){
        $user = $this->user();
        Session::forget('data');
        $user->update([
            'password'  => Hash::make($request->password),
        ]);

        return redirect()->route('login');
    }

    private function user(){
        if(auth()->user()){
            return auth()->user();
        }
        $email = Session::get('data')['email'];
        Session::forget('data');
        return User::where('email',$email)->first();
    }
}
