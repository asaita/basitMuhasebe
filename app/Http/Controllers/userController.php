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
    public function loginpage(){
        return view("login");
    }

    public function login(){
        $this->validate(request(),[
            'email'=>'email|required',
            'password'=>'required'
        ]);
        
        //request()->has('rememberme') beni hatırla seçildiği zaman değer true oluyor.
        if (auth()->attempt(['email'=>request('email'),'password'=>request('password')],
        request()->has('rememberme'))) {
            
            //requestimizin session bilgisini yeniliyoruz
            request()->session()->regenerate();

            //hangi sayfadan giriş yapmaya çalışıyorsak giriş yaptıktan sonra bizi o sayfaya geri
            //yönlendirme işlemi yapıyor
            return redirect()->intended('/');
        } else{
            $errors=['Email'=>'Hatalı Giriş'];
            return back()->withErrors($errors);
        }


       
    }

    public function register(){

        $this->validate(request(),[
            'ad'=>'required',
            'soyad'=>'required',
            'email'=>'email|unique:users',
            'password'=>'required|min:5|max:15'
        ]);

       $newUser=User::create([
        'name'=>request('ad'),
        'surname'=>request('soyad'),
        'email'=>request('email'),
        'password'=>Hash::make(request('password')),
        'activation_key'=>Str::random(60),
        'isActive'=>0,
       ]);

       auth()->login($newUser);

       return redirect()->route('welcome');

    }

    public function logout(){
        auth()->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route("loginPage");
    }
}
