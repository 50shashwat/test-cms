<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\NewsletterSubscription;
use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function getPage($type){
        $page = Page::where('type',$type)->first();
        return view('backend.pages.index', compact('page'));
    }

    public function storePage(Request $request){

        $page = Page::where('type', $request->type)->first();

        $detail=$request->content;
 
        $dom = new \domdocument();
        @$dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getelementsbytagname('img');
 
        //loop over img elements, decode their base64 src and save them to public folder,
        //and then replace base64 src with stored image URL.
        foreach($images as $k => $img){
            $data = $img->getattribute('src');
 
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
 
            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path() .'/images/'. $image_name;
 
            file_put_contents($path, $data);
 
            $img->removeattribute('src');
            $img->setattribute('src', $image_name);
        }
 
        $detail = $dom->savehtml();
        
        $page->content = $detail;
        $page->save();

        return back()->with('success', 'Page Updated Successfully');
    }


    public function queries($type){
        $items = NewsletterSubscription::where('type', $type)->paginate(10);
        return view('backend.queries.index', compact('items','type'));
    }
}
