<x-layout>
    <x-slot name="heading">
        Cabin
    </x-slot>

    <ul>
        @if ($cabin_match)
            <li>
                <a href="/cabin/{{ $cabin_match->id }}">
                    <strong>ID:</strong> {{ $cabin_match->id }}
                </a>
                <h2> {{ $cabin_match->title }} </h2>
                <p> {{ $cabin_match->description }} </p>
                <p> {{ $cabin_match->rating }} </p>
            </li>

           <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:w-screen hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 overflow-x-hidden">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/cabin' . $cabin_match->id . '.webp') }}" alt="">
           <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/inside2.webp') }}" alt=""><img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/inside3.webp') }}" alt="">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/inside5.webp') }}" alt="">

            <div class="flex flex-col justify-between p-4 leading-normal">
            <li> <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Title:{{ $cabin_match['title'] }}</h5></li>
            <li> <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Rating: {{ $cabin_match['rating'] }}</p></li>
        </div>
    </div>
        @else

            <h1>No cabin found</h1>
        @endif
    </ul>

    <h1>Reviews</h1>
    <ul>
        @if ($reviews_all )
        @foreach ($reviews_all as $review)
        <li>
            <strong>Review written by:</strong> {{ $review->userName }}
        </li>

        @endforeach

<div class="flex items-center mb-5">
    <p class="bg-blue-100 text-blue-800 text-sm font-semibold inline-flex items-center p-1.5 rounded dark:bg-blue-200 dark:text-blue-800">8.7</p>
    <p class="ms-2 font-medium text-gray-900 dark:text-white">Excellent</p>
    <span class="w-1 h-1 mx-2 bg-gray-900 rounded-full dark:bg-gray-500"></span>
    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">376 reviews</p>
    <a href="#" class="ms-auto text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read all reviews</a>
</div>
<div class="gap-8 sm:grid sm:grid-cols-2">
    <div>
        <dl>
            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Staff</dt>
            <dd class="flex items-center mb-3">
                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
                </div>
                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.8</span>
            </dd>
        </dl>
        <dl>
            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Comfort</dt>
            <dd class="flex items-center mb-3">
                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 89%"></div>
                </div>
                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.9</span>
            </dd>
        </dl>
        <dl>
            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Free WiFi</dt>
            <dd class="flex items-center mb-3">
                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
                </div>
                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.8</span>
            </dd>
        </dl>
        <dl>
            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Facilities</dt>
            <dd class="flex items-center">
                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 54%"></div>
                </div>
                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">5.4</span>
            </dd>
        </dl>
    </div>
    <div>
        <dl>
            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Value for money</dt>
            <dd class="flex items-center mb-3">
                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 89%"></div>
                </div>
                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.9</span>
            </dd>
        </dl>
        <dl>
            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Cleanliness</dt>
            <dd class="flex items-center mb-3">
                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 70%"></div>
                </div>
                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">7.0</span>
            </dd>
        </dl>
        <dl>
            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Location</dt>
            <dd class="flex items-center">
                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 89%"></div>
                </div>
                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.9</span>
            </dd>
        </dl>
    </div>
</div>

<x-calander></x-calander>

                <li><strong>Title:</strong> {{ $review->title }}</li>
                <li><strong>Body:</strong> {{ $review->body }}</li>
                <li><strong>Rating:</strong> {{ $review->rating }}</li>
                <br>
                @else
            <h1>No reviews to show</h1>
        @endif
    </ul>
    <br>
</x-layout>
