<?php

namespace App\Http\Controllers;

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
}
