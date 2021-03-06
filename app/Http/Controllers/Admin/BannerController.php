<?php

namespace App\Http\Controllers\Admin;

use App\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::paginate(10);
        return view('backend.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = new Banner();
        $background_image = "";
        if($request->file('background_image')){
            $file = $request->file('background_image');
            $destinationPath = public_path().'/images/';
            $fileUrl = time()."_".trim(preg_replace('/\s+/', '', $file->getClientOriginalName()));
            $file->move($destinationPath,$destinationPath.$fileUrl);
            $background_image = $fileUrl;
        }
        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->background_image = $background_image==""? $banner->background_image: $background_image;
        $banner->save();

        
        return redirect('admin/banners')->with('message', 'Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('backend.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $banner = Banner::find($id);
        $background_image = "";
        if($request->file('background_image')){
            $file = $request->file('background_image');
            $destinationPath = public_path().'/images/';
            $fileUrl = time()."_".trim(preg_replace('/\s+/', '', $file->getClientOriginalName()));
            $file->move($destinationPath,$destinationPath.$fileUrl);
            $background_image = $fileUrl;
        }
        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->background_image = $background_image==""? $banner->background_image: $background_image;
        $banner->update();

        
        return redirect('admin/banners')->with('message', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Banner::find($id)->delete();
        $message = $res ? "Deleted Succesfully": "Unable to delete";
        return redirect('admin/banners')->with('message',$message);
    }
}
