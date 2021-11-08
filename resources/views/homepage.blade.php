@extends('layout.base')
{{-- @dump($movies) --}}
@foreach ($movies as $movie)
    {{-- @dump($movie); --}}
    <p>{{$movie['title']}}</p>
@endforeach