<x-layout>
    <x-slot name="heading">
        cabin
    </x-slot>

    {{-- <x-bladewind::datepicker  /> --}}
    <ul>
        <li>
            <a href="/cabin/{{ $cabin_match['id'] }}">
                <strong>Movie ID:</strong> {{ $cabin_match['id'] }}
            </a>
        </li>
        {{-- <img src="{{ Vite::image($cabin_match['image_path']) }}"> --}}
        <img src="{{ asset($cabin_match['image_path']) }}">
        {{-- <img src="{{ asset('/images/cabin1.webp') }}"> --}}
        <li><strong>Movie Title:</strong> {{ $cabin_match['title'] }}</li>
        <li><strong>Movie Director:</strong> {{ $cabin_match['director'] }}</li>
        <li><strong>Movie Year:</strong> {{ $cabin_match['year'] }}</li>
        <li><strong>Movie Genre:</strong> {{ $cabin_match['genre'] }}</li>
        <li><strong>Movie Rating:</strong> {{ $cabin_match['rating'] }}</li>
    </ul>
    <br>
</x-layout>
