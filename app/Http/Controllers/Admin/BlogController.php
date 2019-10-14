<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $posts = Post::where('id','>',0)->paginate(10);
        return view('backend.blog.index', compact('posts'));
    }

    public function store(Request $request){
    
        $request->validate([
            'title'=>'required',
            'slug'=>'required',
            'content'=>'required'
        ]);

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
        $post = new Post();
        $post->content = $detail;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->posted_at = new Carbon();

        $post->save();
        
        return redirect('admin/blog')->with('success', 'Page Updated Successfully');
    }

    public function edit($id){
        $post = Post::find($id);
        return view('backend.blog.edit', compact('post'));
    }

    public function update(Request $request){

    }

    public function create(){
        return view('backend.blog.create');
    }
}
