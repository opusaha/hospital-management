<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        if(Auth::id()){
            if (Auth::user()->type=="0") {
                $doctor=Doctor::all();
                return view('home',compact('doctor'));
            }else{
                return view('admin_dashboard');
            }
        }
    }
    public function appointment(Request  $request){
        $appointment= new Appointment;
        $appointment->patientName=$request->patientName;
        $appointment->specialty=$request->specialty;
        $appointment->doctor=$request->doctor;
        $appointment->patientPhone=$request->patientPhone;
        $appointment->symptoms=$request->symptoms;
        $appointment->date=$request->date;
        $appointment->message=$request->message;
        $appointment->status='In progress';
        if(Auth::id()){
            $appointment->user_id=Auth::user()->id;
        }
        $appointment->save();
        return redirect()->back();
    }
}
