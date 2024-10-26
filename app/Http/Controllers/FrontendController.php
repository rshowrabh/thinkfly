<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Contact;
use Filament\Notifications\Notification;
use DB;

class FrontendController extends Controller
{
    public function index()
    {
        $setting = DB::table('general_settings')->find(1);
        if(!$setting) return redirect()->to('/admin/general-settings-page');
        $our_countries = DB::table('our_countries')->get();
        $banner = DB::table('banners')->find(1);

        return view('frontend.index', compact("banner", "our_countries"));
    } 
    public function data()
    {

        $settings = DB::table('general_settings')->find(1);
        return response()->json($settings->social_network);
    } 
    public function appointment()
    {
        $appointment = DB::table('contacts')->get();
        return view('frontend.appointment',compact('appointment'));
    }
    public function storeAppointment(Request $request)
    {
        $appointment = new Contact;
        $appointment->name = $request->name;           
        $appointment->email = $request->email;         
        $appointment->phone = $request->phone;         
        $appointment->address = $request->address;         
        $appointment->message = $request->message;
        $appointment->save();
        Notification::make() 
        ->title('New Appointment')
        ->success()
        ->persistent()
        ->send(); 
    } 
}
