<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addDoctor(){
        return view('admin.add_doctor');
    }
    public function storeDoctorData(Request $request){
        $doctor=new doctor;
        $image=$request->file;
        $imageName=time().'.'.$image->getClientOriginalName();
        $request->file->move('doctorImage',$imageName);
        $doctor->image=$imageName;
        $doctor->name=$request->name;
        $doctor->email=$request->email;
        $doctor->phone=$request->phone;
        $doctor->room=$request->room;
        $doctor->specialty=$request->specialty;
        $doctor->qualifications=$request->qualifications;
        $doctor->save();
        return redirect()->back();
    }
    public function allDoctor(){
        $doctors=Doctor::all();
        return view('admin.all_doctor',compact('doctors'));
    }
    public function removeDoctor($id=null){
        $doctors=Doctor::findOrFail($id);
        $doctors->delete();
        return redirect()->back();
    }
    public function appointment(){
        $appointment=Appointment::all();
        return view('admin.appointment',compact('appointment'));
    }
    public function approve($id=null){
        $approve=Appointment::findOrFail($id);
        $approve->status='Approved';
        $approve->save();
        return redirect()->back();
    }
    public function cancel($id=null){
        $cancel=Appointment::findOrFail($id);
        $cancel->status='Canceled';
        $cancel->save();
        return redirect()->back();
    }
}
