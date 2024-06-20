<x-layout>
    <x-slot name="heading">
        Films
    </x-slot>

    @foreach($films as $movie)
    <a href="/film/{{ $movie['id'] }}" class="hover:underline text-blue-500">
        <li><strong>Movie ID:</strong> {{ $movie['id'] }}</li>
        <li><strong>Movie Title:</strong> {{ $movie['title'] }}</li>
        <li><strong>Movie Rating:</strong> {{ $movie['rating'] }}</li>
        </a>
        <br>
        @endforeach
        </x-layout>

