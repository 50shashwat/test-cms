<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function about(){
        return view('frontend.static.about');
    }

    public function contact(){
        return view('frontend.static.contact');
    }

    public function careers(){
        return view('frontend.static.careers');
    }

    public function carpenterpathshala(){
        return view('frontend.static.carpenterpathshala');
    }

    public function displaydisign(){
        return view('frontend.static.displaydisign');
    }

    public function channelpartnership(){
        return view('frontend.static.channelpartnership');
    }

    public function helpline(){
        return view('frontend.static.helpline');
    }
}
