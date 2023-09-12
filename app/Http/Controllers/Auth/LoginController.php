<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\Auth\LoginRequest;
use App\Traits\LoginTrait;

class LoginController extends Controller
{
    use LoginTrait;

        
    public function index(){
        return view('registration.login');
    }

    public function login(LoginRequest $request){
        
        $field = $this->checkEmailOrPhone($request->email_or_phone);
    
        if (Auth::attempt([$field => $request->email_or_phone , 'password' => $request->password]
        ,$request->remember ? true : false)){
            $request->session()->regenerate();
            if(auth()->user()->role_id == '1'){
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('user.index');
            }
        }
        
        return redirect()->route('login')->with('error','User is not found');
    }
    
}
