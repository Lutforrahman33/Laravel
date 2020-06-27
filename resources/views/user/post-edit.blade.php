@extends('layouts.app')

@section('title')
 
 user - Create post
@endsection
@section('content')
  <div class="container mt-4">
     <div class="card bg-dark text-white">
       <div class="card-body">
         <h2 class="card-title">Create your post</h2>
           <x-post-form 
            :action="route('user.post.store' ,['post' => $post->id])"
            :title="$post->title"
            :thumb="$post->thumb"
            :content="$post->content"
            :id="$post->id"

           />

       </div>

     </div> 
     
  </div>

@endsection
