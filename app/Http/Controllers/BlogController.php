<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::paginate(10);
        return view('frontend.blog.index', compact('posts'));
    }

    public function show($id){
        $post = Post::find($id);
        return view('frontend.blog.show', compact('post'));
    }
}
