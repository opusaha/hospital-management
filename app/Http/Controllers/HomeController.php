<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        if(Auth::id()){
            if (Auth::user()->type=="0") {
                return view('home');
            }else{
                return view('admin_dashboard');
            }
        }
    }
}
