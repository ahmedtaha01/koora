<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('registration.login');
    }

    public function login(Request $request){
        
        
        $field = 'phone';
        if(filter_var($request->email_or_phone, FILTER_VALIDATE_EMAIL)){
            $field = 'email';
        }

    
        if (Auth::attempt([$field => $request->email_or_phone , 'password' => $request->password])) {
            // $request->session()->regenerate();
            return 'user found';
            // return redirect()->intended('dashboard');
        }
        
        // return 'home';
    }
}
