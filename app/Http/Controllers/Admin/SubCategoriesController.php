<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Subcategory;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Subcategory::with('category')->orderBy('id','desc')->paginate(10);
        return view('backend.products.subcategories.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.products.subcategories.create', compact('categories'));
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
        
        $subcategory = new Subcategory();
        $subcategory->name= $request->title;
        $subcategory->category_id = $request->category_id;
        $subcategory->featured_image = $featured_image;
        $subcategory->save();

        return redirect('admin/subcategories')->with('message', 'Successfully Created');
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
        
        $categories = Category::all();
        $subcategory = SubCategory::find($id);
        return view('backend.products.subcategories.edit', compact('subcategory', 'categories'));
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
        $subcategory = SubCategory::find($id);
        $featured_image = "";
        if($request->file('featured_image')){
            $file = $request->file('featured_image');
            $destinationPath = public_path().'/images/';
            $fileUrl = time()."_".trim(preg_replace('/\s+/', '', $file->getClientOriginalName()));
            $file->move($destinationPath,$destinationPath.$fileUrl);
            $featured_image = $fileUrl;
        }

        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->featured_image = $featured_image==""? $subcategory->featured_image: $featured_image;
        $subcategory->update();

        return redirect('admin/subcategories')->with('message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = SubCategory::find($id)->delete();
        $message = $res ? "Deleted Succesfully": "Unable to delete";
        return redirect('admin/subcategories')->with('message',$message);
    }
}
