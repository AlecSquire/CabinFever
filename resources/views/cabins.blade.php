<x-layout>
    <x-slot name="heading">
       cabins
    </x-slot>

    @foreach($cabins as $cabin)
    <a href="/film/{{ $cabin['id'] }}" class="hover:underline text-blue-500">
       
        <li><strong>cabin ID:</strong> {{ $cabin['id'] }}</li>
        <li><strong>cabin Title:</strong> {{ $cabin['title'] }}</li>
        <li><strong>cabin Rating:</strong> {{ $cabin['rating'] }}</li>
        </a>
        <br>
        @endforeach
    {{-- <x-bladewind::datepicker  /> --}}
        </x-layout>

