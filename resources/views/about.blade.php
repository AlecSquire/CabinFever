<!-- resources/views/about.blade.php -->
<x-layout>
    <x-slot name="heading">
        <div class="relative flex flex-col justify-between w-full h-screen">
            <!-- Background Image with Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black">
                <div class="flex flex-col justify-between w-full h-full bg-bottom bg-no-repeat bg-cover"
                    style="background-image: url('{{ asset('/images/cabin-lake.webp') }}');">

                    <!-- Your content here -->


                    <div class="flex items-end justify-between w-full p-4 ">
<x-bladewind::button class="w-1/4 bg-yellow-500 hover:bg-yellow-500">
                        <div class="flex flex-col items-end space-y-2 text-right">
                            <div class="text-3xl text-yellow-300 hover:text-yellow-100">34</div>
                            <div class="text-white">Years Experience</div>
                            <div class="text-3xl text-yellow-300 hover:text-yellow-100">25</div>
                            <div class="text-white">Remote Locations</div>
                            <div class="text-3xl text-yellow-300 hover:text-yellow-100">1300</div>
                            <div class="text-white">Happy Adventurous</div>
                            <div class="flex items-center space-x-2">
                                <a class="color-slate-400" href="/about" :active="request()->is('about')">
Enter The Wild
                                </a>
                                </x-bladewind::button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-24 bg-white sm:py-32">
                    <div class="grid px-6 mx-auto max-w-7xl gap-x-8 gap-y-20 lg:px-8 xl:grid-cols-3">
                      <div class="max-w-2xl">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Meet the team behind Wild Cabins.</h2>
                        <p class="mt-6 text-lg leading-8 text-gray-900">We are made up of experts in their respective fields.</p>
                      </div>
                      <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">

<img src="{{ asset('images/team2.webp') }}" alt="Wild Cabins" class="w-full rounded-lg">
<img src="{{ asset('images/cassiano-psomas-fzCa6ruUodQ-unsplash.webp') }}" alt="Wild Cabins" class="w-full rounded-lg">
                        <!-- More people... -->
                      </ul>
                    </div>
                  </div>


                  <div class="px-6 py-24 mx-auto max-w-7xl lg:px-8 sm:py-32">
                    <div class="max-w-2xl mx-auto sm:text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-100 sm:text-4xl">About Wild Cabins</h2>
                        <p class="mt-6 text-lg leading-8 text-gray-100">
                            At Wild Cabins, we specialize in offering secluded retreats amidst breathtaking landscapes.
                            Whether you seek adventure or tranquility, our cabins provide a gateway to reconnect
                            with nature.
                        </p>
                    </div>
                    <div class="max-w-2xl mx-auto mt-16 rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
                        <div class="p-8 sm:p-10 lg:flex-auto">
                            <h3 class="text-2xl font-bold tracking-tight text-gray-100">Our Values</h3>
                            <p class="mt-6 text-base leading-7 text-gray-100">
                                <span class="font-semibold">Authenticity:</span> We are committed to providing
                                authentic experiences that honor the natural surroundings and local communities.
                                <br>
                                <span class="font-semibold">Quality:</span> We maintain high standards in every
                                aspect of our cabins, ensuring comfort, cleanliness, and safety for all our guests.
                                <br>
                                <span class="font-semibold">Hospitality:</span> Our team is dedicated to creating
                                warm, welcoming environments where guests feel at home.
                            </p>
                            <div class="flex items-center mt-10 gap-x-4">
                                <h4 class="flex-none text-sm font-semibold leading-6 text-indigo-600">Sustainability</h4>
                                <div class="flex-auto h-px bg-gray-100"></div>
                            </div>
                            <ul role="list"
                                class="grid grid-cols-1 gap-4 mt-8 text-sm leading-6 text-gray-100 sm:grid-cols-2 sm:gap-6">
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Environmental Stewardship
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Community Engagement
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="flex-none w-5 h-6 text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Guest Education
                                </li>
                            </ul>
                        </div>
                        <div
                            class="p-2 -mt-2 text-center lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0 bg-gray-50 rounded-2xl ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
                          <img src="{{ asset('/images/couple-tent.webp') }}" alt="Wild Cabins" class="h-auto rounded-lg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>

