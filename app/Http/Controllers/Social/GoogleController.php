<?php

namespace App\Http\Controllers\Social;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function LoginUsingGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function CallboackFromGoogle(){
        try{
            $user=Socialite::driver('google')->user();
            $is_user=User::where('email',$user->getEmail())->first();
            if(!$is_user){
                $saveUser=User::updateOrCreate(
                    [
                        'google_id'=>$user->getId(),
                    ],
                    [
                        'name'=>$user->getName(),
                        'email'=>$user->getEmail(),
                        'password'=>Hash::make($user->getName().'@'.$user->getId())
                    ]
                );
            }else{
                $saveUser=User::where('email',$user->getEmail())->update([
                    'google_id'=>$user->getId(),

                ]);
                $saveUser=User::where('email',$user->getEmail())->first();
            }

            Auth::loginUsingId($saveUser->id);
            return redirect()->route('home');
        }catch(\Throwable $th){
            throw $th;
        }
    }
}
