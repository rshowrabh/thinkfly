<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FrontendController extends Controller
{
    public function index()
    {
        $banner = DB::table('banners')->get();
        return view('frontend.index', compact("banner"));
    } 
}
