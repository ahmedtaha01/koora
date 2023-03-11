<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterOwnerRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterOwnerController extends Controller
{
    public function index(){
        return view('registration.owner-register');
    }

    public function store(RegisterOwnerRequest $request){
        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'password'  => Hash::make($request->password),
            'code'      => mt_rand(1000000,9999999),
            'role_id'   => '21'
        ]);

        Auth::login($user);
        
        return redirect()->route('admin.dashboard');
    }
}
