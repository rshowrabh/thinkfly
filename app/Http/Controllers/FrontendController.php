<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Appointment;
use DB;
class FrontendController extends Controller
{
    public function index()
    {
        $banner = DB::table('banners')->get();
        return view('frontend.index', compact("banner"));
    } 
    public function appointment()
    {
        $appointment = DB::table('appointments')->get();
        return view('frontend.appointment',compact('appointment'));
    }
    public function store(Request $request)
    {
        $appointment = new Appointment;
        $appointment->name = $request->name;         
        $appointment->email = $request->email;         
        $appointment->phone = $request->phone;         
        $appointment->address = $request->address;         
        $appointment->message = $request->message;
        $appointment->save();
        Toastr::success('Message Sent successfully :)','Success');
    } 
}
