<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ProfilePasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfilePassworController extends Controller
{
    public function index(){
        return view('user.change-password');
    }

    public function update(ProfilePasswordRequest $request){
        $user = User::find(auth()->user()->id);
        $user->update([
            'password'      => Hash::make($request->new_password),
        ]);

        return redirect()->route('user.update_password')
        ->with('success','password has been updated successfully');
    }
}
