<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class muhasebeController extends Controller
{
    public function welcome(){
        return view("welcome");
    }
}
