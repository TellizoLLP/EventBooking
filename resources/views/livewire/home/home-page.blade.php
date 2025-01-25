<div class="h-screen w-screen flex flex-col overflow-clip" x-data="alpineSystem">

    <div class="w-full h-2 flex">
        <div class="w-[25%] h-2 bg-[#d4f100]"></div>
        <div class="w-[25%] h-2 bg-[#50805b]"></div>
        <div class="w-[25%] h-2 bg-[#e28535]"></div>
        <div class="w-[25%] h-2 bg-[#e95644]"></div>
    </div>
    <div class="w-full flex items-center justify-between py-5 px-6 bg-white">

        <img src="{{ asset('assets/img/Logo@4x.png') }}" class="h-20" alt="">

        <div class="flex flex-col">
            <h2 class="text-2xl font-bold text-gray-800">Attending the Event</h2>
            <p class="text-gray-600">Explore Exhibitions and Free Seminars</p>
        </div>

    </div>
    <div class="w-full h-2 flex">
        <div class="w-[25%] h-2 bg-gray-100"></div>
        <div class="w-[25%] h-2 bg-gray-200"></div>
        <div class="w-[25%] h-2 bg-gray-100"></div>
        <div class="w-[25%] h-2 bg-gray-200"></div>
    </div>




    <div class="w-full h-full overflow-y-auto">

        <div class="p-6 bg-gray-100 space-y-6 relative">
            <div class="bg-white p-6 rounded-lg shadow" x-show="page == 1"
                x-transition:enter="transition-opacity transform ease-out duration-500"
                x-transition:enter-start="opacity-0 -translate-x-full"
                x-transition:enter-end="opacity-100 translate-x-0"
                x-transition:leave="transition-opacity transform ease-in duration-500 absolute inset-0"
                x-transition:leave-start="opacity-100 translate-x-0 "
                x-transition:leave-end="opacity-0 -translate-x-full">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">General Information</h2>
                <div class="space-y-4">
                    <div class="w-full grid sm:grid-cols-1 lg:grid-cols-2 gap-4">
                        <div class="col-span-2 sm:col-span-1">
                            <label class="block text-sm font-medium text-gray-600 mb-1">First Name <span
                                    class="text-red-500">*</span></label>
                            <input type="text" wire:model="first_name"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            @error('first_name')
                            <span class="text-red-500 text-xs">{{$message}} </span>
                            @enderror
                        </div>
                        <div class="col-span-1">
                            <label class="block text-sm font-medium text-gray-600 mb-1">Last Name <span
                                    class="text-red-500">*</span></label>
                            <input type="text" wire:model="last_name"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            @error('last_name')
                            <span class="text-red-500 text-xs">{{$message}} </span>
                            @enderror
                        </div>
                        <div class="col-span-1">
                            <label class="block text-sm font-medium text-gray-600 mb-1">Email <span
                                    class="text-red-500">*</span></label>
                            <input type="text" wire:model="email"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            @error('email')
                            <span class="text-red-500 text-xs">{{$message}} </span>
                            @enderror
                        </div>
                        <div class="col-span-1">
                            <label class="block text-sm font-medium text-gray-600 mb-1">Phone Number <span
                                    class="text-red-500">*</span></label>
                            <input type="text" wire:model="phone"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            @error('phone')
                            <span class="text-red-500 text-xs">{{$message}} </span>
                            @enderror
                        </div>
                        <div class="col-span-1">
                            <label class="block text-sm font-medium text-gray-600 mb-1">Current status <span
                                    class="text-red-500">*</span></label>
                            <select wire:model.live="current_status"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="1">Student</option>
                                <option value="2">Parent</option>
                            </select>
                            @error('current_status')
                            <span class="text-red-500 text-xs">{{$message}} </span>
                            @enderror
                        </div>

                        <div class=""></div>
                        <div class="">
                            <label class="block text-sm font-medium text-gray-600 mb-1">School Name <span
                                    class="text-red-500">*</span></label>
                            <input type="text" wire:model="school_name"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            @error('school_name')
                            <span class="text-red-500 text-xs">{{$message}} </span>
                            @enderror
                        </div>
                        <div class="">
                            <label class="block text-sm font-medium text-gray-600 mb-1">Grade <span
                                    class="text-red-500">*</span></label>
                            <select wire:model="school_grade"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Select A Grade</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            @error('school_grade')
                            <span class="text-red-500 text-xs">{{$message}} </span>
                            @enderror
                        </div>
                        <div class="">
                            <label class="block text-sm font-medium text-gray-600 mb-1">How did you hear about us? <span
                                    class="text-red-500">*</span></label>
                            <select wire:model="referral_method"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Select Option</option>
                                <option value="Social Media">Social Media</option>
                                <option value="Word of mouth">Word of mouth</option>
                                <option value="WYN Academy Website">WYN Academy Website</option>
                                <option value="Other">Other</option>
                            </select>
                            @error('referral_method')
                            <span class="text-red-500 text-xs">{{$message}} </span>
                            @enderror
                        </div>
                        <div class=""></div>
                        <div class=""></div>
                        <div class="flex justify-end">
                            <button @click="$wire.pageOneSave()" class="px-5 py-2.5 h-fit  cursor-pointer text-sm antialiased font-semibold bg-[#285a49] text-white rounded-lg">
                                Next
                            </button>
                        </div>
                    </div>

                </div>

            </div>


            <div class="bg-white p-6 rounded-lg shadow" x-show="page == 2"
                x-transition:enter="transition-opacity transform ease-out duration-500"
                x-transition:enter-start="opacity-0 -translate-x-full"
                x-transition:enter-end="opacity-100 translate-x-0"
                x-transition:leave="transition-opacity transform ease-in duration-500 absolute inset-0"
                x-transition:leave-start="opacity-100 translate-x-0 "
                x-transition:leave-end="opacity-0 -translate-x-full" x-cloak>
                {{-- <h2 class="text-lg font-semibold text-gray-800 mb-4">General Information</h2>
                <div class="space-y-4">
                    <div class="w-full grid sm:grid-cols-1 lg:grid-cols-2 gap-4">
                        <div class="">
                            page2
                        </div>
                        <div class="flex justify-end">
                            <button @click="$wire.pageTwoSave()" wire:loading.attr="disabled"
                                class="px-5 py-2.5 cursor-pointer h-fit text-sm antialiased font-semibold bg-[#285a49] disabled:bg-[#285a496a] text-white rounded-lg">
                                Next
                                <span class="loader" wire:loading></span>
                            </button>
                        </div>
                    </div>

                </div> --}}
                <div class="flex w-full justify-between items-center">
                    <div class="flex flex-col">
                        <h2 class="text-lg font-semibold text-gray-800 antialiased">Specialty</h2>
                        <div class="text-xs font-medium text-gray-600 mb-4 antialiased">You can choose only 3 of the 5 Medzone
                            experiences
                            below</div>
                    </div>
                    <div class="flex gap-2">
                        <button class="text-sm font-semibold text-neutral-500 bg-neutral-100 px-3 py-2 rounded-lg antialiased">Skip</button>
                        <div class="flex justify-end">
                            <button @click="$wire.pageTwoSave()" wire:loading.attr="disabled"
                                class="px-5 py-2.5 cursor-pointer h-fit text-sm antialiased font-semibold bg-[#285a49] disabled:bg-[#285a496a] text-white rounded-lg">
                                Next
                                <span class="loader" wire:loading></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">



                    @foreach ($rooms as $roomIndex => $room)
                    <div class="">
                        <div class="flex gap-2 bg-gray-100 w-fit px-3 py-2 rounded-t-lg mt-3.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-black" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M14 6v15H3v-2h2V3h9v1h5v15h2v2h-4V6zm-4 5v2h2v-2z" />
                            </svg>
                            <span>{{ $room['roomName'] }}</span>
                        </div>

                        <div class="flex bg-gray-100 p-2 py-3">
                            <div class="w-full grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">
                                @foreach ($room['sessions'] as $session)
                                <!-- <div class="w-full bg-{{ $session['clickable'] ? '[#285a49]' : 'white' }} rounded-lg shadow p-4"> -->
                                <!-- <div class="w-full hover:bg-[#1c4a38] bg-white rounded-lg shadow p-4"> -->
                                <div


                                    class=" session-card 
        {{ !$session['clickable'] || in_array($session['id'], $disabledTimeSlots) ? 'opacity-50 cursor-not-allowed bg-gray-300' : '' }}
                            {{ isset($selectedSessions[$roomIndex]) && $selectedSessions[$roomIndex] == $session['id'] ? 'bg-[#285a49] text-white' : 'bg-white text-neutral-700' }}
                            {{ isset($selectedSessions[$roomIndex]) && $selectedSessions[$roomIndex] !== $session['id'] ? 'bg-white' : '' }}
                            w-full  rounded-lg shadow p-4"

                                    wire:click="selectSession({{ $roomIndex }}, {{ $session['id'] }})" style="transition: background-color 0.3s;">


                                    <!-- Session Info -->
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">

                                            @if($room['roomName'] === 'Studio 7')
                                            <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M16 14h-3v3h-2v-3H8v-2h3V9h2v3h3m5-7h-2.65l1.15-3.15L17.15 1l-1.46 4H3v2l2 6l-2 6v2h18v-2l-2-6l2-6z" />
                                                </svg>
                                            </div>
                                            @endif
                                            @if($room['roomName'] === 'Room 6')
                                            <div class="w-10 h-10 bg-green-400 rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 512 512">
                                                    <path fill="currentColor"
                                                        d="M217.4 27.43c-27.9.47-53.1 17.11-64.5 42.84l136.5 41.23c6-35.79-15.5-70.49-50.1-81.02c-6.2-1.88-12.7-2.91-19.2-3.05zm-69.7 60.08c-6.1 35.89 15.4 70.69 50.1 81.19c34.8 10.5 71.9-6.7 86.5-40zm265.5 44.29c-25.3.1-52.2 12.3-72.5 41L215.9 349.7c-33.5 47.4-18.9 97 14.1 120.4c33.1 23.5 84.6 20.8 118.1-26.6l124.7-176.8c33.5-47.5 18.9-97-14.1-120.5c-12.4-8.8-27.3-13.9-43-14.4zm-1.8 17.3c1.3 0 2.6 0 3.8.1c12.1.5 23.5 4.8 33.1 11.7c25.7 18.2 38.6 54.5 9.7 95.4l-64.5 91.5c-35.8-9.6-81.8-42.3-102.7-73l64.7-91.6c16.9-23.9 37-33.7 55.9-34.1M91.25 225.3c-9.62.1-19.11 2.1-27.93 6c-33.11 14.5-50.34 51.5-40.24 86.3l130.72-57.1c-13.1-22.1-36.9-35.5-62.55-35.2m69.65 51.6L30.2 334.1c18.45 31.4 57.3 44 90.6 29.5c33.2-14.6 50.4-51.8 40.1-86.7" />
                                                </svg>
                                            </div>
                                            @endif

                                            @if($room['roomName'] === 'Room 4')
                                            <div
                                                class="w-10 h-10 bg-[#e28535] rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M16.808 3.125q1.246.02 2.123.887t.877 2.113q0 .237-.028.66t-.103 1.005l-1.394 10.076q-.067.584-.517.934q-.449.35-1.033.35q-.402 0-.707-.221t-.534-.537l-2.963-4.034q-.108-.139-.24-.224q-.131-.086-.314-.086q-.177 0-.554.36l-2.888 3.91q-.254.326-.584.579t-.732.253q-.584 0-1.02-.362q-.437-.363-.505-.947L4.323 7.79q-.075-.581-.103-1.005t-.028-.661q0-1.246.877-2.123t2.123-.877q.727 0 1.246.238t1.018.512t1.091.513T12 4.625q.88 0 1.482-.238t1.1-.512t1.012-.513t1.214-.237" />
                                                </svg>



                                            </div>
                                            @endif
                                            @if($room['roomName'] === 'Room 5')
                                            <div
                                                class="w-10 h-10 bg-[#e95644] rounded-full flex items-center justify-center">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor" fill-rule="evenodd"
                                                        d="M8.962 18.469C6.019 16.214 2 12.489 2 8.967C2 3.083 7.5.886 12 5.43C16.5.886 22 3.083 22 8.967c0 3.522-4.02 7.247-6.962 9.502C13.706 19.489 13.04 20 12 20s-1.706-.51-3.038-1.531M16.5 6.25a.75.75 0 0 1 .75.75v1.25h1.25a.75.75 0 0 1 0 1.5h-1.25V11a.75.75 0 0 1-1.5 0V9.75H14.5a.75.75 0 0 1 0-1.5h1.25V7a.75.75 0 0 1 .75-.75"
                                                        clip-rule="evenodd" />
                                                </svg>




                                            </div>
                                            @endif
                                            @if($room['roomName'] === 'Studio 3')
                                            <div
                                                class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6"
                                                    viewBox="0 0 15 15">
                                                    <path fill="currentColor"
                                                        d="M7.5 6c-2.5 0-3 2.28-3 3.47a6.2 6.2 0 0 0-1.7.89a2 2 0 0 0-.4 2.78a2.06 2.06 0 0 0 2.8.4a4 4 0 0 1 2.3-.69a4 4 0 0 1 2.3.69a2 2 0 0 0 2.8-.3a1.93 1.93 0 0 0-.226-2.72l-.074-.06l-.1-.1a9 9 0 0 0-1.7-.89C10.5 8.29 10 6 7.5 6M2.08 4.3a1.58 1.58 0 0 0-.76 2a1.52 1.52 0 0 0 1.61 1.4a1.58 1.58 0 0 0 .76-2a1.52 1.52 0 0 0-1.61-1.4m10.85 0a1.58 1.58 0 0 1 .76 2a1.52 1.52 0 0 1-1.61 1.4a1.58 1.58 0 0 1-.76-2a1.52 1.52 0 0 1 1.61-1.4m-7.85-3c-.68.09-1 .94-.76 1.87A1.77 1.77 0 0 0 5.93 4.7c.68-.09 1-.94.76-1.87A1.77 1.77 0 0 0 5.08 1.3m4.85 0c.68.09 1 .94.76 1.87A1.77 1.77 0 0 1 9.07 4.7c-.68-.08-1-.94-.76-1.87A1.77 1.77 0 0 1 9.93 1.3" />
                                                </svg>
                                            </div>
                                            @endif
                                            <div class="ml-3">
                                                <p class=" font-semibold">
                                                    {{ $session['name'] }}
                                                </p>
                                                <p class="text-sm ">
                                                    {{ $session['session'] }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="text-sm ">
                                            {{ $session['duration'] }}
                                        </div>
                                    </div>

                                    <!-- Time Info -->
                                    <div class="my-4 border-t border-gray-200/30 pt-4">
                                        <div class="flex justify-between items-center">
                                            <div>
                                                <p class="text-sm font-bold ">
                                                    {{ $session['start_time'] }}
                                                </p>
                                            </div>
                                            <!-- Flight Icon -->
                                            <div class="text-gray-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6 "
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M12 4c6.928 0 11.258 7.5 7.794 13.5A9 9 0 0 1 12 22C5.072 22 .742 14.5 4.206 8.5A9 9 0 0 1 12 4"
                                                        class="duoicon-secondary-layer" opacity="0.3" />
                                                    <path fill="currentColor"
                                                        d="M7.366 2.971A1 1 0 0 1 7 4.337a10.1 10.1 0 0 0-2.729 2.316a1 1 0 1 1-1.544-1.27a12 12 0 0 1 3.271-2.777a1 1 0 0 1 1.367.365zM18 2.606a12 12 0 0 1 3.272 2.776a1 1 0 0 1-1.544 1.27a10 10 0 0 0-2.729-2.315a1 1 0 0 1 1.002-1.731zM12 8a1 1 0 0 0-.993.883L11 9v3.986c-.003.222.068.44.202.617l.09.104l2.106 2.105a1 1 0 0 0 1.498-1.32l-.084-.094L13 12.586V9a1 1 0 0 0-1-1"
                                                        class="duoicon-primary-layer" />
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-sm font-bold ">
                                                    {{ $session['end_time'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Additional Info -->
                                    <div class="flex justify-between items-center text-sm  mt-2">
                                        <div class="flex items-center gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 "
                                                viewBox="0 0 512 512">
                                                <path fill="currentColor"
                                                    d="M459.15 269.75a133.197 133.197 0 0 1-55.862 179.975l-42.782 22.541l-10.52 5.533a71.28 71.28 0 0 1-62.966 1.685l-167.077-71.38l15.733-46.676l99.363 19.194l-51.458-97.78l-82.843-157.411l40.357-21.232l82.844 157.457l19.934-10.485l-36.521-69.445l40.335-21.22l36.52 69.445l19.935-10.485l-28.2-53.598l40.358-21.232l28.2 53.598l19.945-10.576l-19.354-36.886l40.346-21.174l19.354 36.885l54.348 103.301zM73.268 146.674a60.03 60.03 0 0 1 42.361-102.459a60.098 60.098 0 0 1 56.58 80.169l10.588 20.013A78.29 78.29 0 0 0 115.708 26a78.233 78.233 0 0 0-5.635 156.262L99.428 162.02a59.7 59.7 0 0 1-26.16-15.346" />
                                            </svg>
                                            <p>{{ $session['clickable'] ? 'Click to select' : 'Not selectable' }}</p>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M4 18v3h3v-3h10v3h3v-6H4zm15-8h3v3h-3zM2 10h3v3H2zm15 3H7V5a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2z" />
                                            </svg>
                                            <p>{{ $session['slots'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>


            <div class="bg-white p-6 rounded-lg shadow" x-show="page == 3"
                x-transition:enter="transition-opacity transform ease-out duration-500"
                x-transition:enter-start="opacity-0 -translate-x-full"
                x-transition:enter-end="opacity-100 translate-x-0"
                x-transition:leave="transition-opacity transform ease-in duration-500 absolute inset-0"
                x-transition:leave-start="opacity-100 translate-x-0 "
                x-transition:leave-end="opacity-0 -translate-x-full" x-cloak>
                <div class="">
                    <div class="flex w-full justify-between items-center">
                        <div class="flex flex-col">
                            <h2 class="text-lg font-semibold text-gray-800 antialiased">Micro-courses</h2>
                            <div class="text-xs font-medium text-gray-600 mb-4 antialiased">You can choose only 1 Micro-courses
                                below</div>
                        </div>
                        <div class="flex gap-2">
                        <button class="text-sm font-semibold text-neutral-500 bg-neutral-100 px-3 py-2 rounded-lg antialiased">Skip</button>
                        <div class="flex justify-end">
                            <button @click="$wire.pageThreeSave()" wire:loading.attr="disabled"
                                class="px-5 py-2.5 cursor-pointer h-fit text-sm antialiased font-semibold bg-[#285a49] disabled:bg-[#285a496a] text-white rounded-lg">
                                Next
                                <span class="loader" wire:loading></span>
                            </button>
                        </div>
                    </div>
                    </div>
                    <div class="flex flex-col">
    
                        <div class="flex gap-2 bg-gray-100 w-fit px-3 py-2 rounded-t-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-black" viewBox="0 0 24 24"><path fill="currentColor" d="M14 6v15H3v-2h2V3h9v1h5v15h2v2h-4V6zm-4 5v2h2v-2z"/></svg>
                            <span>Time : 02:00 PM - 04:00PM</span>
                        </div>
                        <div class="flex bg-gray-100 p-2 py-3">
                            <div class="w-full grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4  gap-2">

                            @foreach ($Mainrooms as $mainRoomIndex => $mainroom)
    @foreach ($mainroom['sessions'] as $mainSession)
        <div
            class="session-card 
            {{ isset($selectedMainSessions[$mainRoomIndex]) && $selectedMainSessions[$mainRoomIndex] == $mainSession['id'] ? 'bg-[#285a49] text-white' : 'bg-white text-neutral-700' }} 
            w-full rounded-lg shadow p-4"
            wire:click="selectMainSession({{ $mainRoomIndex }}, {{ $mainSession['id'] }})" 
            style="transition: background-color 0.3s;">
            
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div>
                        <p class="text-neutral-800 font-semibold">{{ $mainSession['name'] }}</p>
                        <p class="text-sm text-neutral-800">{{ $mainroom['roomName'] }}</p>
                        <span class="text-xs text-neutral-800">({{ $mainSession['name'] }})</span>
                    </div>
                </div>
            </div>

            <div class="flex justify-between items-center text-sm text-neutral-800 mt-2">
                <div class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-neutral-800" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M459.15 269.75a133.197 133.197 0 0 1-55.862 179.975l-42.782 22.541l-10.52 5.533a71.28 71.28 0 0 1-62.966 1.685l-167.077-71.38l15.733-46.676l99.363 19.194l-51.458-97.78l-82.843-157.411l40.357-21.232l82.844 157.457l19.934-10.485l-36.521-69.445l40.335-21.22l36.52 69.445l19.935-10.485l-28.2-53.598l40.358-21.232l28.2 53.598l19.945-10.576l-19.354-36.886l40.346-21.174l19.354 36.885l54.348 103.301zM73.268 146.674a60.03 60.03 0 0 1 42.361-102.459a60.098 60.098 0 0 1 56.58 80.169l10.588 20.013A78.29 78.29 0 0 0 115.708 26a78.233 78.233 0 0 0-5.635 156.262L99.428 162.02a59.7 59.7 0 0 1-26.16-15.346" />
                    </svg>
                    <p>Click to select</p>
                </div>
                <div class="flex items-center gap-1 text-neutral-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M4 18v3h3v-3h10v3h3v-6H4zm15-8h3v3h-3zM2 10h3v3H2zm15 3H7V5a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2z" />
                    </svg>
                    <p>40/40</p>
                </div>
            </div>
        </div>
    @endforeach
@endforeach
                       
                                </div>
                            </div>
                        </div>
    
    
    
                    </div>

                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow" x-show="page == 4" x-transition x-cloak>
                <h2 class="text-lg font-semibold text-gray-800 mb-4">General Information</h2>
                <div class="space-y-4">
                    <div class="w-full grid sm:grid-cols-1 lg:grid-cols-2 gap-4">
                        <div class="col-span-2 sm:col-span-1">
                            <label class="block text-sm font-medium text-gray-600 mb-1">First Name <span
                                    class="text-red-500">*</span></label>
                            <input type="text" wire:model="first_name"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            @error('first_name')
                            <span class="text-red-500 text-xs">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col-span-1">
                            <label class="block text-sm font-medium text-gray-600 mb-1">Last Name <span
                                    class="text-red-500">*</span></label>
                            <input type="text" wire:model="last_name"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            @error('last_name')
                            <span class="text-red-500 text-xs">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="flex justify-end">
                            <button @click="$wire.save()" wire:loading.attr="disabled"
                                class="px-5 py-2.5 cursor-pointer h-fit text-sm antialiased font-semibold bg-[#285a49] disabled:bg-[#285a496a] text-white rounded-lg">
                                Register
                                <span class="loader" wire:loading></span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


    {{-- <div class="flex gap-2 items-center divide-x gap-">
        <a href="{{route('page-1')}}" class="hover:underline transition-all duration-300 pr-2">Page One</a>
    <a href="{{route('page-2')}}" class="hover:underline transition-all duration-300 pr-2">Page Two</a>
    <a href="{{route('page-3')}}" class="hover:underline transition-all duration-300">Page Three</a>
</div> --}}

<script>
    function alpineSystem() {
        return {
            page: @entangle('page')
        }
    }
</script>
</div>