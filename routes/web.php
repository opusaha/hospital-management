<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    if(Auth::id()){
        return redirect('home');
    }else{
    $doctor=Doctor::all();
    return view('welcome',compact('doctor'));
    }
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// USER ROUTE

Route::get('/home',[HomeController::class,'home']);
Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/my-appointment',[HomeController::class,'myAppointment']);
Route::get('/cancel-appointment/{id}',[HomeController::class,'cancelAppointment']);


// ADMIN ROUTE

Route::get('/add-doctor',[AdminController::class,'addDoctor']);
Route::get('/all-doctor',[AdminController::class,'allDoctor']);
Route::post('/store-doctor-data',[AdminController::class,'storeDoctorData']);
Route::get('/appointment',[AdminController::class,'appointment']);
Route::get('/approve/{id}',[AdminController::class,'approve']);
Route::get('/cancel/{id}',[AdminController::class,'cancel']);