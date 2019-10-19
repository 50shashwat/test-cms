<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\InnerCategory;
use App\Subcategory;
use Illuminate\Http\Request;

class InnerCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = InnerCategory::with('subcategory')->orderBy('id','desc')->paginate(10);
        return view('backend.products.innercategories.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = Subcategory::all();
        return view('backend.products.innercategories.create', compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $featured_image = "";
        if($request->file('featured_image')){
            $file = $request->file('featured_image');
            $destinationPath = public_path().'/images/';
            $fileUrl = time()."_".trim(preg_replace('/\s+/', '', $file->getClientOriginalName()));
            $file->move($destinationPath,$destinationPath.$fileUrl);
            $featured_image = $fileUrl;
        }
        
        $innerCategory = InnerCategory::create($request->all());
        $innerCategory->featured_image = $featured_image;
        $innerCategory->save();

        return redirect('admin/innercategories')->with('message', 'Successfully Created');
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
        $innercategory = InnerCategory::find($id);
        $subcategories = Subcategory::all();
        return view('backend.products.innercategories.edit', compact('innercategory','subcategories'));
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
        $innercategory = InnerCategory::find($id);
        $featured_image = "";
        if($request->file('featured_image')){
            $file = $request->file('featured_image');
            $destinationPath = public_path().'/images/';
            $fileUrl = time()."_".trim(preg_replace('/\s+/', '', $file->getClientOriginalName()));
            $file->move($destinationPath,$destinationPath.$fileUrl);
            $featured_image = $fileUrl;
        }
        $innercategory->name = $request->name;
        $innercategory->subcategory_id = $request->subcategory_id;
        $innercategory->featured_image = $featured_image==""? $innercategory->featured_image: $featured_image;
        $innercategory->update();

        return redirect('admin/innercategories')->with('message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = InnerCategory::find($id)->delete();
        $message = $res ? "Deleted Succesfully": "Unable to delete";
        return redirect('admin/innercategories')->with('message',$message);
    }
}
