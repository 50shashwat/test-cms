<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use App\InnerCategory;
use App\Subcategory;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function categories($id){
        return Category::find($id)->subcategories()->get();
    }

    
    public function subcategories($id){
        return Subcategory::find($id)->innercategories()->get();
    }



    
}
