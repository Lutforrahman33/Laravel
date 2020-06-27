<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Post;

class PostController extends Controller
{
    public function index(){
         
       $posts = Post::orderBy('id' , 'desc')->paginate(5);
    	return view('index' , compact('posts'));
    }

    public function show(Post $post){
         
       return view('show' , compact('post'));
    }

    //storing post

    public function store(Request $request){
         
       
       $this->save(new Post , $request);
       return back()->with('success' , 'Post Created');
    }

    //ctreating post

    public function create(){
         
       
       return view('user.post-create');
    }

    //editing post

    public function edit(Post $post){
         
       
       return view('user.post-edit', compact('post'));
    }

    //updating post
    
    public function update(Request $request , Post $post){
         
       
       $this->save($post , $request);
       return back()->with('success' , 'Post Update');
    }
    
    //deleting post

    public function destroy(Post $post){
         
       
       $image_path = "/images/" . $post->thumb;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $post->delete();
        return redirect('user');
    }



    private function save(Post $post , Request $request){
          $request->validate([

            'title'   => ['required'],
            'content' => ['required'],
            'thumb'   => ['required' ,'sometimes' ,'image' , 'mimes:jpeg,png,jpg,gif'],

          ]);

          if($request->file('thumb')){
               $imagePath = $request->file('thumb');
               $uuid = Str::uuid()->toString();
               $imageName = $uuid . '-' . $imagePath->getClientOriginalName();
               $request->thumb->move(public_path('images'), $imageName);
               $post->thumb = $imageName;

          }

          $post->title = $request->input('title');
          $post->content = $request->input('content');
          $post->user_id = auth()->user()->id;
          $post->save();

       
    }



}
