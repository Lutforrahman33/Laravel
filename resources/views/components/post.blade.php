<div class="card bg-dark text-white mb-4">
	<div
    style="height: 36em; background-size: cover; background-image: url('{{ asset('images/'. $thumb) }}');"

	></div>
 
	<div class="card-body">
		
		<h2 class="card-title">{{ $title }}</h2>
		@if($link !== '')
         {!! \Illuminate\Support\Str::limit(strip_tags($description), $limit=200 , $end='..') !!}
         @else
         {!! $description !!}
		@endif
		
		<p class="text-muted">{{ $writer }} - {{ $publishedAt }}</p>

        @if($link !== '')
        <a href="{{ $link }}" class="stretched-link"></a>
        @endif

	</div>
  
</div>