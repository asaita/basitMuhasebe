<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class userController extends Controller
{
    public function signUp(){
        return view("sign-up");
    }

    public function register(){

       $newUser=User::create([
        'name'=>request('ad'),
        'surname'=>request('soyad'),
        'email'=>request('email'),
        'password'=>Hash::make(request('password')),
        'activation_key'=>Str::random(60),
        'isActive'=>0,
       ]);

       auth()->login($newUser);

       return redirect()->route('to-do');

    }
}
