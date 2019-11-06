<?php

namespace App\Http\Controllers;

use App\Category;
use App\Mail\ContactConfirm;
use App\Mail\ContactPost;
use App\Mail\ResumeConfirm;
use App\NewsletterSubscription;
use App\Page;
use App\Popup;
use App\Post;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StaticController extends Controller
{

    public function home(){
        $posts = Post::orderBy('id','desc')->limit(3)->get();
        $popup = Popup::find(1);
        return view('frontend.index', compact('posts','popup'));
    }

    public function about(){
        $content = array();
        $content[] = Page::where('type','about-summary')->first()->content;
        $content[] = Page::where('type','about-benefit')->first()->content;
        $content[] = Page::where('type','about-our-vision')->first()->content;
        $content[] = Page::where('type','about-our-mission')->first()->content;
        $content[] = Page::where('type','about-section-one')->first()->content;
        $content[] = Page::where('type','about-section-two')->first()->content;
        $content[] = Page::where('type','about-section-three')->first()->content;
        $content[] = Page::where('type','about-section-four')->first()->content;
        return view('frontend.static.about', compact('content'));
    }

    public function contact(){ 
        $content = array();
        $content[] = Page::where('type','contact-head-office')->first()->content;
        $content[] = Page::where('type','contact-registered-office')->first()->content;
        $content[] = Page::where('type','contact-branch')->first()->content;
        return view('frontend.static.contact', compact('content'));
    }

    public function careers(){
        return view('frontend.static.careers');
    }

    public function carpenterpathshala(){
        $content = Page::where('type','carpenter-pathshala')->first()->content;
        return view('frontend.static.carpenterpathshala', compact('content'));
    }

    public function displaydisign(){
        $content = Page::where('type','display-design')->first()->content;
        return view('frontend.static.displaydisign', compact('content'));
    }

    public function channelpartnership(){
        return view('frontend.static.channelpartnership');
    }

    public function helpline(){
        $content = Page::where('type','helpline')->first()->content;
        return view('frontend.static.helpline', compact('content'));
    }

    public function sendContact(Request $request){
        
        $objDemo = new \stdClass();
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:191']
        ]);

        $fileUrl = "";
        if($request->has('resume') &&  $request->file('resume')){
            $file = $request->file('resume');
            $destinationPath = public_path().'/resume/';
            $fileUrl = time()."_".trim(preg_replace('/\s+/', '', $file->getClientOriginalName()));
            $file->move($destinationPath,$destinationPath.$fileUrl);
            $objDemo->resume = $destinationPath.$fileUrl;
        }

        if($request->has('others')){
            if($request->others=="others"){
                $request->merge(['others' => $request->other2]);
            }
        }

        $objDemo->name = $request->has('name') ? $request->name: "";
        $objDemo->email =  $request->has('email') ?$request->email:"";
        $objDemo->phone = $request->has('phone') ? $request->phone:"";
        $objDemo->type =  $request->has('type') ?$request->type:"";
        $objDemo->message = $request->has('message') ? $request->message:"";
        $objDemo->others = $request->has('others') ?  ($request->others=="others" ?  $request->other2 : $request->others): "" ;
        NewsletterSubscription::create(array_merge($request->all(), ['resume' => $fileUrl]));
        
        if($request->type=="careers"){
            Mail::to($request->email)->send(new ResumeConfirm());
            Mail::to('resumes@harrisonlocks.com')->send(new ContactPost($objDemo));
        }
        if($request->type=="newsletter"){
            //do nothing
        }
        if($request->type !="careers" && $request->type != "newsletter"){       
            Mail::to($request->email)->send(new ContactConfirm());
            Mail::to('exports@harrisonlocks.com')->send(new ContactPost($objDemo));
        }
        return back()->with('success', 'Message Sent Successfully');
        
    }

    public function achievements(){
        $content = Page::where('type','achievements')->first()->content;
        return view('frontend.static.achievements', compact('content'));
    }

    public function terms(){
        $content = Page::where('type','terms')->first()->content;
        return view('frontend.static.terms', compact('content'));
    }

    
    public function privacy(){
        $content = Page::where('type','privacy')->first()->content;
        return view('frontend.static.privacy', compact('content'));
    }

    
    public function disclaimer(){
        $content = Page::where('type','disclaimer')->first()->content;
        return view('frontend.static.disclaimer', compact('content'));
    }

    public function aboutpage($type){
        $page = Page::where('type',$type)->first();
        if($page!=null){
            $page->title = ucwords(str_replace("-"," ", $page->type)," ");
        }
        else{
            $page = new Page();
            $page->content = "<h2>No Content Found</h2>";
            $page->title = "Not Found";
            $page->type = $type;
        }
        return view('frontend.page.index', compact('page'));
    }
}
