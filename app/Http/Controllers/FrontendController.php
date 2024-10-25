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
        $setting = DB::table('general_settings')->find(1);
        if(!$setting) return redirect()->to('/admin/general-settings-page');
        $banner = DB::table('banners')->find(1);
        return view('frontend.index', compact("banner", "setting"));
    } 
    public function data()
    {

        $settings = DB::table('general_settings')->find(1);
        return response()->json($settings->social_network);
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
