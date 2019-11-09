<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Popup;
use Illuminate\Http\Request;

class PopupController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popups = Popup::find(1);
        return view('backend.popup.index', compact('popups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit()
    {
        $popup = Popup::find(1);
        return view('backend.popups.edit', compact('popup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $popup = Popup::find(1);
        $featured_image = "";
        if($request->file('image_url')){
            $file = $request->file('image_url');
            $destinationPath = public_path().'/images/';
            $fileUrl = time()."_".trim(preg_replace('/\s+/', '', $file->getClientOriginalName()));
            
            $file->move($destinationPath,$destinationPath.$fileUrl);
            
            $featured_image = $fileUrl;
        }
        $popup->image_url = $featured_image==""? $popup->image_url: $featured_image;
        $popup->is_active = $request->is_active;
        $popup->is_image = $request->is_image;
        $popup->video_url = $request->video_url;
        
        $popup->update();
        
        return redirect('admin/popup')->with('message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
