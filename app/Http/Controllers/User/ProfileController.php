<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    
    public function index(){
        return view('user.profile-settings');
    }

    public function update(UpdateProfileRequest $request){

        $user = User::find(auth()->user()->id);
        if($user->image != null){
            File::delete(public_path('storage/images/users/'.$user->image));
        }
        $image_name = time().'-'.$request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images/users',$image_name);
        $user->update([
            'name'      => $request->name,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'dob'       => $request->dob,
            'image'     => $image_name,
        ]);

        return redirect()->route('user.profile_settings')->with('success','profile updated successfully');
    }

}
