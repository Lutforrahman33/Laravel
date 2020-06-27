@extends('layouts.app')

@section('title')
 
 user
@endsection
@section('content')
  <div class="container mt-4">
      
      <x-jumbotron
       title="Welcome {{ Auth::user()->name }}"
       semititle="Add your post"
       description="Click to post"
       />

      @foreach($posts as $post)
        <x-post 
      :title="$post->title"
      :writer="$post->user->name"
      :description="$post->content"
      :thumb="$post->thumb"
      :published-at="$post->created_at"
      :link="'/user/post/'.$post->id"
        />

      @endforeach  

      {{ $posts ?? ''->links() }}
  </div>

@endsection
