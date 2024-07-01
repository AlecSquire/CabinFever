<x-layout>
    <x-slot name="heading">

    </x-slot>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-4">
        <div class="bg-slate-100 rounded-2xl p-4 xl:p-8">
<h1 class="font-manrope text-4xl text-zinc-700 text-center font-bold mb-4"> Last Minute Deals</h1>
<p class="text-lg text-zinc-700  text-center mb-14">Unforgettable activities hosted by locals at crazy low prices</p>
<x-Countdown></x-Countdown>
    <div class=" lg:flex-row gap-4  flex-col flex items-center justify-center">
        <a href="/cabins" class=" hover:bg-slate-200">
<x-NorthSouth></x-NorthSouth>
</a>
</div>
</div>

</div>
<h1 class="font-manrope text-4xl text-zinc-700 text-center font-bold mt-4 mb-4"> Featured trips </h1>

<div class="grid grid-cols-1 sm:grid-cols-2 pt-12 md:grid-cols-3   gap-4">
        @foreach($cabins as $cabin)
        <a href="/cabin/{{ $cabin['id'] }}" class="flex justify-center max-w-[820px] items-center bg-white border border-gray-200 rounded-lg shadow h-full">
            <div class="flex flex-col justify-between p-4 w-full h-full transition-all duration-1000  bg-gray-400 rounded-md bg-clip-padding  backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100 leading-normal flex-grow">
                <img class="object-cover w-full h-48 transition-all duration-300 hover:opacity-0.2	rounded-t-lg md:h-48 max-h-full max-w-full " src="{{ asset('images/cabin' . $cabin['id'] . '.webp') }}" alt="Image of {{ $cabin['title'] }}">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700">Title: {{ $cabin['title'] }}</h5>
                <p class="mb-3 font-normal bg text-gray-700">
                    Rating:
                    <div class="flex items-center">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $cabin['rating'])
                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                            @else
                                <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                            @endif
                        @endfor
                    </div>
                </p>
            </div>
        </a>
        @endforeach
    </div>
</div>
</x-layout>
