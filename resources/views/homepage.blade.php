ciao mondo
{{-- @dump($movies) --}}
@foreach ($movies as $movie)
    {{-- @dump($movie); --}}
    <p>{{$movie['title']}}</p>
@endforeach