<?php

namespace App\Http\Controllers\Auth\Socialite;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Http;

class FacebookController extends Controller
{
    public function redirectToProvider(){
        
        return Socialite::driver('facebook')->redirect();
    }

    public function handleCallback(){
        $user = Socialite::driver('facebook')->user();
        // return $user->avatar_original . "&access_token={$user->token}";
       
        $newUser = User::where('provider_id',$user->id)->first();
        if(! $newUser){
            // $img_url = "https://graph.facebook.com/v18.0/".$user->id. "/picture?type=normal&access_token=".$user->token;
           
            // $image_name = time().'-'.$user->id.'.facebook'.'.jpg';

        
            

            $newUser = User::create([
                'name'          => $user->getName(),
                'email'         => $user->getEmail(),
                'password'      => Hash::make($user->id.'-'.$user->getNickname()),
                'provider_id'   => $user->id,
                'provider_type' => 'facebook',
                'image'         => null,
                'code'          => mt_rand(1000000,9999999),
                'role_id'       => '2',
            ]);
            
            // $path = public_path('storage/images/users/'.$image_name);
            // file_put_contents($path, file_get_contents($img_url));

        }

        Auth::loginUsingId($newUser->id);
        
        return redirect()->route('user.index');
    }
}
