<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-zinc-900">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>first_project</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/js/app.js')
    <script src="//unpkg.com/alpinejs" defer></script> @vite('resources/js/app.js')

    {{-- @inertiaHead --}}
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('index.css') }}" rel="stylesheet">
    <!-----------------------------------------------------------
-- animate.min.css by Daniel Eden (https://animate.style)
-- is required for the animation of notifications and slide out panels
-- you can ignore this step if you already have this file in your project
--------------------------------------------------------------------------->

<link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
<link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
<script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
<script src="//unpkg.com/alpinejs" defer></script>

    <!-- Styles -->
    <style>
        /* Tailwind CSS Reset */
        *, ::after, ::before { box-sizing: border-box; }
        :host, html { line-height: 1.5; -webkit-text-size-adjust: 100%; -moz-tab-size: 4; tab-size: 4; font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji; font-feature-settings: normal; font-variation-settings: normal; -webkit-tap-highlight-color: transparent; }
        body { margin: 0; padding: 0; line-height: inherit; }
        /* Additional styles */
        .playwrite-au-vic-custom {
            font-family: "Playwrite AU VIC", cursive;
            font-optical-sizing: auto;
            font-weight: 300; /* Adjust the weight as needed, between 100 and 400 */
            font-style: normal;
        }
    </style>
</head>
<body class="w-full" id="app">
    {{-- @inertia --}}
    <div class="min-h-screen bg-zinc-900">
        <nav class="bg-zinc-900">
            <div class="px-4 mx-auto sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="hidden ml-4 md:block">
                            <div class="flex items-baseline space-x-4">
                                <x-nav href="/" :active="request()->is('/')">Home</x-nav>
                                <x-nav href="/about" :active="request()->is('about')">About</x-nav>
                                <x-nav href="/contact" :active="request()->is('contact')">Contact</x-nav>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <button type="button" class="relative p-1 text-gray-400 bg-gray-800 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex -mr-2 md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" class="relative inline-flex items-center justify-center p-2 text-gray-400 bg-gray-800 rounded-md hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg class="block w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg class="hidden w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Mobile menu, show/hide based on menu state. -->

        <div class="md:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <x-nav href="/" :active="request()->is('/')">Home</x-nav>
                <x-nav href="/about" :active="request()->is('about')">About</x-nav>
                <x-nav href="/contact" :active="request()->is('contact')">Contact</x-nav>
            </div>
            <div class="pt-4 pb-3 border-t border-gray-700">
                <div class="flex items-center px-5">
                    <img class="w-20 h-20" src="{{ Vite::image('LOGO.png') }}" alt="Your Company">
                    <div class="ml-3">
                        <div class="text-base font-medium leading-none text-white">User Details</div>
                        <div class="text-sm font-medium leading-none text-gray-400">userDetails@example.com</div>
                    </div>
                    <button type="button" class="relative flex-shrink-0 p-1 ml-auto text-gray-400 bg-gray-800 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>
                </div>
                <div class="px-2 mt-3 space-y-1">
                    <a href="#" class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Your Profile</a>
                    <a href="#" class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Settings</a>
                    <a href="#" class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Sign out</a>
                </div>
            </div>
        </div>
    </nav>
    <header class="bg-zinc-900">
        <div class="max-w-full ">
            <h1 class="text-3xl font-bold tracking-tight">{{ $heading }}</h1>

        </div>
    </header>
    <main>
        <div class="max-w-full py-6 mx-auto text-orange-600 sm:px-6 lg:px-8">
            {{ $slot }}


        </div>
    </main>
</div>

</body>
</html>
