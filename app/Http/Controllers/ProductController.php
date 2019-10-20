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
        $products = Category::find($categoryId)->products();
        return view('frontend.products.index',compact('products'));
    }

    public function subcategoryProducts($categoryId, $subcategoryId){
        $products = Product::where('subcategory_id', $subcategoryId)->get();
        return view('frontend.products.index',compact('products'));
    }

    public function innercategoryProducts($categoryId, $subcategoryId,$innercategoryId){
        $products = Product::where('innercategory_id', $innercategoryId)->get();
        return view('frontend.products.index',compact('products'));
    }

    public function productshow($productId){
        $product = Product::with('category','subcategory','innercategory')->find($productId);
        return view('frontend.products.show', compact('product'));
    }
}
