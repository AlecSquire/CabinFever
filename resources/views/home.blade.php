<x-layout>
    <x-slot name="heading">
        <div class="relative px-6 py-24 overflow-hidden bg-white isolate sm:py-32 lg:overflow-visible lg:px-0">
            <div class="flex flex-col mx-auto lg:flex-row max-w-7xl">
                <!-- Image on the Left -->
                <div class="flex-shrink-0 lg:w-1/2">
                    <img src="{{ asset('images/inside1.webp') }}" alt="Landscape" class="w-full h-auto rounded-lg shadow-xl">
                </div>

                <!-- Content on the Right -->
                <div class="flex flex-col justify-center lg:ml-12 lg:w-1/2">
                    <!-- Logo -->
                    <div class="flex items-center justify-center mb-8">
                        <img src="{{ asset('images/LOGO.png') }}" width="200">
                    </div>

                    <!-- Heading Text -->
                    <div class="mb-8 text-center">
                        <h2 class="text-3xl font-bold text-gray-900">Welcome to Wild Cabins</h2>
                        <p class="mt-4 text-lg text-gray-700">Discover the beauty of remote cabins in the wild.</p>
                    </div>

                    <!-- Button -->
                    <div class="flex justify-center">
                        <button class="px-6 py-3 font-semibold text-white bg-yellow-500 rounded-lg hover:bg-yellow-200">Explore Now</button>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
    <x-trust-badges/>
</x-layout>
<x-content></x-content>
<x-pricing></x-pricing>
