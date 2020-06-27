@extends('layouts.app')

@section('title')
 
 Home
@endsection
@section('content')
  <div class="container mt-4">
      
      <x-jumbotron
       title="Welcome to this Page"
       semititle="Laravel project"
       description="Nothing"
       />

      @foreach($posts as $post)
        <x-post 
      :title="$post->title"
      :writer="$post->user->name"
      :description="$post->content"
      :thumb="$post->thumb"
      :published-at="$post->created_at"
      :link="'/post/'.$post->id"
        />

      @endforeach  

      {{ $posts->links() }}
  </div>

@endsection
