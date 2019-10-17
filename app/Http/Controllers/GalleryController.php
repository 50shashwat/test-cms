<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function video(){

        $content = Page::where('type','video-gallary')->first()->content;
        return view('frontend.gallery.video', compact('content'));
    }

}
