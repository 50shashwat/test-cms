<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\InnerCategory;
use App\Product;
use App\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Product::with('category','subcategory','innercategory')->orderBy('id','desc')->paginate(10);
        return view('backend.products.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $innercategories = InnerCategory::all();
        return view('backend.products.create', compact('categories','subcategories','innercategories'));
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
        if($request->file('featured_image1')){
            $file = $request->file('featured_image1');
            $destinationPath = public_path().'/images/';
            $fileUrl = time()."_".trim(preg_replace('/\s+/', '', $file->getClientOriginalName()));
             
            $file->move($destinationPath,$destinationPath.$fileUrl);
            $featured_image = $fileUrl;
        }
        $product= new Product();
        $product->title = $request->title;
        $product->content = $request->content!=""? $request->content:".";
        $product->featured_image  = $featured_image;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->innercategory_id = $request->innercategory_id;


        $product->save();

        return redirect('admin/products')->with('message', 'Successfully Created');
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
        $subcategories = SubCategory::all();
        $innercategories = InnerCategory::all();
        $product = Product::find($id);
        return view('backend.products.edit', compact('subcategories', 'categories','innercategories','product'));
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
        $product = Product::find($id);
        $featured_image = "";
        if($request->file('featured_image1')){
            $file = $request->file('featured_image1');
            $destinationPath = public_path().'/images/';
            $fileUrl = time()."_".trim(preg_replace('/\s+/', '', $file->getClientOriginalName()));
            $file->move($destinationPath,$destinationPath.$fileUrl);
            $featured_image = $fileUrl;
        }

        $product->title = $request->title;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->innercategory_id = $request->innercategory_id;
        $product->featured_image = $featured_image==""? $product->featured_image:$featured_image;
        $product->content = $request->content==""? ".": $request->content;
        $product->update();

        return redirect('admin/products')->with('message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Product::find($id)->delete();
        $message = $res ? "Deleted Succesfully": "Unable to delete";
        return redirect('admin/products')->with('message',$message);
    }

   
}
