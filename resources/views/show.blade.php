@extends('layouts.app')

@section('title')
 
 Post - {{ $post->title }}
@endsection
@section('content')
  <div class="container mt-4">
      
   

      
        <x-post 
      :title="$post->title"
      :writer="$post->user->name"
      :description="$post->content"
      :thumb="$post->thumb"
      :published-at="$post->created_at"
       link=""
        />

  

      
  </div>

@endsection
