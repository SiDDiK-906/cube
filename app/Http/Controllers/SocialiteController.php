<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class SocialiteController extends Controller
{
    // For Github
    function github_redirect_method(){
        return Socialite::driver('github')->redirect();
    }
    function github_callback_method(){
        $user = Socialite::driver('github')->user();

        if (User::where('email',$user->getEmail())->exists()) {
            $auth_status = Auth::attempt([
                'email'=> $user->getEmail(),
                'password'=> $user->getEmail(),
            ]);
            if ($auth_status == 1) {
                return redirect('/home');
            } else {
                echo "Authentication Error";
            }
        }
        else {
            User::insert([
                'name'=> $user->getNickname(),
                'email'=> $user->getEmail(),
                'password'=> bcrypt($user->getEmail()),
                'created_at'=> Carbon::now(),
            ]);
            $auth_status = Auth::attempt([
                'email'=> $user->getEmail(),
                'password'=> $user->getEmail(),
            ]);
            if ($auth_status == 1) {
                return redirect('/home');
            } else {
                echo "Authentication Error";
            }

        }
    }
    // For Google
    function google_redirect_method(){
        return Socialite::driver('google')->redirect();
    }
    function google_callback_method(){
        $user = Socialite::driver('google')->user();

        if (User::where('email',$user->getEmail())->exists()) {
            $auth_status = Auth::attempt([
                'email'=> $user->getEmail(),
                'password'=> $user->getEmail(),
            ]);
            if ($auth_status == 1) {
                return redirect('/home');
            } else {
                echo "Authentication Error";
            }
        }
        else {
            User::insert([
                'name'=> $user->getName(),
                'email'=> $user->getEmail(),
                'password'=> bcrypt($user->getEmail()),
                'created_at'=> Carbon::now(),
            ]);
            $auth_status = Auth::attempt([
                'email'=> $user->getEmail(),
                'password'=> $user->getEmail(),
            ]);
            if ($auth_status == 1) {
                return redirect('/home');
            } else {
                echo "Authentication Error";
            }

        }
    }
}
