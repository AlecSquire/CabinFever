<x-layout>
    <x-slot name="heading">
        <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
            <div class="mx-auto flex flex-col lg:flex-row max-w-7xl">
                <!-- Image on the Left -->
                <div class="flex-shrink-0 lg:w-1/2">
                    <img src="{{ asset('images/inside1.webp') }}" alt="Landscape" class="w-full h-auto rounded-lg shadow-xl">
                </div>

                <!-- Content on the Right -->
                <div class="flex flex-col justify-center lg:ml-12 lg:w-1/2">
                    <!-- Logo -->
                    <div class="flex justify-center items-center mb-8">
                        <img src="{{ asset('images/LOGO.png') }}" width="200">
                    </div>

                    <!-- Heading Text -->
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold text-gray-900">Welcome to Wild Cabins</h2>
                        <p class="mt-4 text-lg text-gray-700">Discover the beauty of remote cabins in the wild.</p>
                    </div>

                    <!-- Button -->
                    <div class="flex justify-center">
                        <button class="bg-yellow-500 hover:bg-yellow-200 py-3 px-6 rounded-lg text-white font-semibold">Explore Now</button>
                    </div>
                </div>
            </div>
        </div>
       
    </x-slot>
    <x-trust-badges/>
</x-layout>
<x-content></x-content>
<x-pricing></x-pricing>
