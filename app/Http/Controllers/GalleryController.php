<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function video(){

        return view('frontend.gallery.video');
    }

}
