<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;

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
    public function contactUsForm(Request $request)
    {
        // dd($request->all());
        Mail::to('sahaapo@gmail.com')->send(new ContactUs($request->name,$request->email,$request->phone,$request->content));
        return redirect()->back();
    }
    // public function email()
    // {
    //     return view('email_template');
    // }
}
