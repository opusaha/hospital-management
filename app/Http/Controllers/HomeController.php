<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function appointment(Request  $request){
        $appointment= new appointment;
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
    public function myAppointment(){
        if(Auth::id()){
        $userId=Auth::user()->id;
        $appointment=appointment::where('user_id',$userId)->get();
        return view('home.my_appointment',compact('appointment'));
        }
    }
    public function cancelAppointment($id){
        $data=Appointment::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
