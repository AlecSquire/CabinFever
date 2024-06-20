<x-layout>

    <x-slot:heading>
        Shows
    </x-slot:heading>

<ul>
    @foreach ($shows as $show)

<li>{{ $show['title'] }}</li>

</ul>
  
</x-layout>
