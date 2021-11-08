@extends('layout.base')

@section('content')    
    {{-- @dump($movies) --}}
    <div class="container">
        @foreach ($movies as $movie)
            {{-- @dd($movie); --}}
            {{-- <p>{{$movie['title']}}</p> --}}
            <div class="card">
                <h2>titolo: {{$movie['title']}}</h2>
                <h2>titolo originale: {{$movie['original_title']}}</h2>
                <p>Paese: {{$movie["nationality"]}}</p>
                <p>Data uscita: {{$movie["date"]}}</p>
                <p>Critica: {{$movie["vote"]}}</p>
            </div>
        @endforeach
    </div>
@endsection