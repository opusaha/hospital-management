<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function home(){
        if(Auth::id()){
            if (Auth::user()->type=="0") {
                $doctor=Doctor::all();
                return view('home',compact('doctor'));
            }elseif(Auth::user()->type=="1"){
                return view('admin_dashboard');
            }elseif(Auth::user()->type=="2"){
                return view('super_admin_dashboard');
            }else{
                return view('doctor_dashboard');
            }
        }
    }
}
