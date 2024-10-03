<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use DB;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = DB::table('banners')->get();
        return view('admin.banner',compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
    if ($request->file('image')) {
        $imageName = 'banner-man-img.png';
        $request->image->move(public_path('assets/imgs/banner-1/'), $imageName);
         }
        $data=Banner::findOrFail(1);
        $data->update([
        'heading'=>$request->heading,
        'url' =>  $request->url,
    ]);
       Toastr::success('Banner Section Updated','Success');
        return redirect()->route('banner.index')->with('message', 'Banner Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
