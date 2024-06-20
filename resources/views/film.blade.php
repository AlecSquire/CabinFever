<x-layout>
    <x-slot name="heading">
        Film
    </x-slot>

        <ul>
            <li>
                <a href="/film/{{ $movie_match['id'] }}">
                    <strong>Movie ID:</strong> {{ $movie_match['id'] }}
                </a>
            </li>
            <li><strong>Movie Title:</strong> {{ $movie_match['title'] }}</li>
            <li><strong>Movie Director:</strong> {{ $movie_match['director'] }}</li>
            <li><strong>Movie Year:</strong> {{ $movie_match['year'] }}</li>
            <li><strong>Movie Genre:</strong> {{ $movie_match['genre'] }}</li>
            <li><strong>Movie Rating:</strong> {{ $movie_match['rating'] }}</li>
        </ul>

    <br>
</x-layout>
