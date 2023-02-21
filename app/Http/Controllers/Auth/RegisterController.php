<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(Request $request){
        return view('registration.register');
    }

    public function store(RegisterRequest $request){
        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'password'  => Hash::make($request->password),
            'code'      => '5546432',
            'role_id'   => ($request->owner ? '22' : '21')
        ]);

        Auth::login($user);
        
        if($user->role_id == '22'){
            return redirect()->route('admin.dashboard');
        }

        return 'home';  //change
    }
}
