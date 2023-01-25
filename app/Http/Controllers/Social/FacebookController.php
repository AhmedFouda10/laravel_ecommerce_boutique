<?php

namespace App\Http\Controllers\Social;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function LoginUsingFacebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function CallboackFromFacebook(){
        try{
            $user=Socialite::driver('facebook')->user();
            $saveUser=User::updateOrCreate(
                [
                    'facebook_id'=>$user->getId(),
                ],
                [
                    'name'=>$user->getName(),
                    'email'=>$user->getEmail(),
                    'password'=>Hash::make($user->getName().'@'.$user->getId())
                ]
            );
            Auth::loginUsingId($saveUser->id);
            return redirect()->route('home');
        }catch(\Throwable $th){
            throw $th;
        }
    }
}
