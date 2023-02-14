<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class Socialites extends Controller
{
    public function googleredirect(Request $request){
        return Socialite::driver('google')->redirect();
    }
    public function googlecallback(Request $request){

            $user = Socialite::driver('google')->stateless()->user();
            $userCheck = User::where('google_id', $user->getId())->first();
            if(!$userCheck){
                User::create([
                    'name'=>$user->getName(),
                    'email'=> $user->getEmail(),
                    'google_id'=>$user->getId(),
                ]);
                return redirect('homepage');
            }else{
                return redirect('homepage');
            }
    }
    public function Fbredirect(Request $request){
        return Socialite::driver('facebook')->redirect();
    }
    public function Fbcallback(Request $request){
            $user = Socialite::driver('facebook')->stateless()->user();
            $userCheck = User::where('facebook_id', $user->getId())->first();
            if(!$userCheck){
                 User::create([
                    'name'=>$user->getName(),
                    'email'=> $user->getEmail(),
                    'facebook_id'=>$user->getId(),
                ]);
                return redirect('homepage');
            }else{
                return redirect('homepage');
            }

    }

}
