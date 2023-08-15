<?php

namespace App\Http\Controllers\Auth\Socialite;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToProvider(){
        
        return Socialite::driver('google')->redirect();
    }

    public function handleCallback(){
        $user = Socialite::driver('google')->user();
        
        $newUser = User::where('provider_id',$user->id)->first();
        if(! $newUser){
            $img_url = $user->getAvatar();
            $image_name = time().'-'.$user->id.'google'.'.jpg';

            $newUser = User::create([
                'name'          => $user->getName(),
                'email'         => $user->getEmail(),
                'password'      => Hash::make($user->id.'-'.$user->getNickname()),
                'provider_id'   => $user->id,
                'provider_type' => 'google',
                'image'         => $image_name,
                'code'          => mt_rand(1000000,9999999),
                'role_id'       => '2',
            ]);

            $path = public_path('storage/images/users/'.$image_name);
            file_put_contents($path, file_get_contents($img_url));
        }

        Auth::loginUsingId($newUser->id);
        
        return redirect()->route('user.index');
    }
}
