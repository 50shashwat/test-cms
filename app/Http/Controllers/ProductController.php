<?php

namespace App\Http\Controllers;

use App\Category;
use App\InnerCategory;
use App\Product;
use App\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index(){
        return view('frontend.products.index');
    }

    public function lock(){
        return view('frontend.products.lock');
    }
    
    public function kitchen_accessories(){
        return view('frontend.products.kitchen_accessories');
    }

    public function categoryProducts($categoryId){
        $category = Category::find($categoryId);
        $products = Category::find($categoryId)->products();
        return view('frontend.products.index',compact('products','category'));
    }

    public function subcategoryProducts($categoryId, $subcategoryId){
        $category = Category::find($categoryId);
        $subcategory = Subcategory::find($subcategoryId);
        $products = Product::where('subcategory_id', $subcategoryId)->get();
        return view('frontend.products.index',compact('products','category','subcategory'));
    }

    public function innercategoryProducts($categoryId, $subcategoryId,$innercategoryId){
        $category = Category::find($categoryId);
        $subcategory = Subcategory::find($subcategoryId);
        $innercategory = InnerCategory::find($innercategoryId);
        $products = Product::where('innercategory_id', $innercategoryId)->get();
        return view('frontend.products.index',compact('products','category','subcategory','innercategory'));
    }

    public function productshow($productId){
        $product = Product::with('category','subcategory','innercategory')->find($productId);
        return view('frontend.products.show', compact('product'));
    }

    public function searchproduct(Request $request){
        $products = array();

        $categoryProducts = Category::query()->where('name','LIKE',"%{$request->name}%")->get();
        $subcategoryProducts = SubCategory::query()->where('name','LIKE',"%{$request->name}%")->get();
        $innercategoryProducts = InnerCategory::query()->where('name','LIKE',"%{$request->name}%")->get();
        $productsSearchs = Product::query()->where('title','LIKE',"%{$request->name}%")->with('category','subcategory','innercategory')->get();
        
        foreach($categoryProducts as $categoryProduct)
        {
            $products = array_merge($products, Product::where('category_id', $categoryProduct->id)->with('category')->get()->toArray());
        }
        foreach($subcategoryProducts as $subcategoryProduct)
        {
            $products = array_merge($products,Product::where('subcategory_id', $subcategoryProduct->id)->with('category','subcategory')->get()->toArray());
        }
        foreach($innercategoryProducts as $innercategoryProduct)
        {
            $products = array_merge($products,Product::where('innercategory_id', $innercategoryProduct->id)->with('category','subcategory','innercategory')->get()->toArray());
        }
        $products = array_merge($products,$productsSearchs->toArray());
        
        $products = collect($products);
        return view('frontend.page.search', compact('products'));
    }
}
