<?php

namespace App\Http\Controllers;

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
}
