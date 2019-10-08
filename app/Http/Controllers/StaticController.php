<?php

namespace App\Http\Controllers;

use App\Mail\ContactPost;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

    public function sendContact(Request $request){
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $type = $request->type;
        $message = $request->message;

        $objDemo = new \stdClass();
        $objDemo->name = $request->name;
        $objDemo->email = $request->email;
        $objDemo->phone = $request->phone;
        $objDemo->type = $request->type;
        $objDemo->message = $request->message;

        Mail::to('info@harrisonlocks.com')->send(new ContactPost($objDemo));

        return back()->with('success', 'Message Sent Successfully');
        
    }
}
