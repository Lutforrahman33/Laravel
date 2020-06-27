@props([
     'title' => 'title',
     'semititle' => 'semititle',
     'description' => 'description',

])

<div class="jumbotron bg-dark text-white">
  <h1 class="display-4">{{ $title }}</h1>
  <p class="lead">{{ $semititle }}</p>
  <hr class="my-4" />
  <p>{{ $description }}</p>
 
</div>>