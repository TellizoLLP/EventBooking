<div class="h-screen w-screen flex flex-col overflow-clip">

    <div class="w-full flex items-center justify-center py-5 px-5 bg-gray-100">
        <img src="{{ asset('assets/img/Logo@4x.png') }}" class="h-20" alt="">
    </div>


    {{-- <div class="w-full h-full overflow-y-auto">
        <div class="w-full grid sm:grid-cols-1 md:grid-cols-2 gap-4 p-6">

            <div class="flex flex-col w-full gap-1">
                <span class="antialiased text-sm text-neutral-600 font-medium">First Name</span>
                <input type="text" class="w-full px-2 py-2 roundeds ring-1 ring-neutral-200 outline-none">
            </div>

            <div class="flex flex-col w-full gap-1">
                <span class="antialiased text-sm text-neutral-600 font-medium">Last Name</span>
                <input type="text" class="w-full px-2 py-2 roundeds ring-1 ring-neutral-200 outline-none">
            </div>

            <div class="flex flex-col w-full gap-1">
                <span class="antialiased text-sm text-neutral-600 font-medium">Email</span>
                <input type="text" class="w-full px-2 py-2 roundeds ring-1 ring-neutral-200 outline-none">
            </div>
            <div class="flex flex-col w-full gap-1">
                <span class="antialiased text-sm text-neutral-600 font-medium">Phone Number</span>
                <input type="text" class="w-full px-2 py-2 roundeds ring-1 ring-neutral-200 outline-none">
            </div>
            <div class="flex flex-col w-full gap-1">
                <span class="antialiased text-sm text-neutral-600 font-medium">Phone Number</span>
                <select type="text" class="w-full px-2 py-2 roundeds ring-1 ring-neutral-200 outline-none">
                    <option value="">Student</option>
                    <option value="">Parent</option>
                </select>
            </div>
            <div class=""></div>
            <div class="flex flex-col w-full gap-1">
                <span class="antialiased text-sm text-neutral-600 font-medium">School Name</span>
                <input type="text" class="w-full px-2 py-2 roundeds ring-1 ring-neutral-200 outline-none">
            </div>
            <div class="flex flex-col w-full gap-1">
                <span class="antialiased text-sm text-neutral-600 font-medium">Grade</span>
                <select type="text" class="w-full px-2 py-2 roundeds ring-1 ring-neutral-200 outline-none">
                    <option value="">8</option>
                    <option value="">9</option>
                    <option value="">10</option>
                    <option value="">11</option>
                    <option value="">12</option>
                </select>
            </div>
            <div class="flex flex-col w-full gap-1">
                <span class="antialiased text-sm text-neutral-600 font-medium">How did you hear about us?</span>
                <select type="text" class="w-full px-2 py-2 roundeds ring-1 ring-neutral-200 outline-none">
                    <option value="">Social Media</option>
                    <option value="">Word of mouth</option>
                    <option value="">WYN Academy Website</option>
                    <option value="">Other</option>
                </select>
            </div>


        </div>
    </div> --}}

    <div class="w-full h-full overflow-y-auto">

        <div class="p-6 bg-gray-100 space-y-6">
            <!-- General Information Section -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">General Information</h2>
                <div class="space-y-4">
                    <div class="w-full grid sm:grid-cols-1 lg:grid-cols-2 gap-4">
                        <div class="">
                            <label class="block text-sm font-medium text-gray-600 mb-1">First Name <span
                                    class="text-red-500">*</span></label>
                            <input type="text"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>
                        <div class="">
                            <label class="block text-sm font-medium text-gray-600 mb-1">Last Name <span
                                    class="text-red-500">*</span></label>
                            <input type="text"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>
                        <div class="">
                            <label class="block text-sm font-medium text-gray-600 mb-1">Email <span
                                    class="text-red-500">*</span></label>
                            <input type="text"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>
                        <div class="">
                            <label class="block text-sm font-medium text-gray-600 mb-1">Phone Number <span
                                    class="text-red-500">*</span></label>
                            <input type="text"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>
                        <div class="">
                            <label class="block text-sm font-medium text-gray-600 mb-1">Current status <span
                                    class="text-red-500">*</span></label>
                            <select
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Student</option>
                                <option value="">Parent</option>
                            </select>
                        </div>
                        <div class=""></div>
                        <div class="">
                            <label class="block text-sm font-medium text-gray-600 mb-1">School Name <span
                                    class="text-red-500">*</span></label>
                            <input type="text"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>
                        <div class="">
                            <label class="block text-sm font-medium text-gray-600 mb-1">Grade <span
                                    class="text-red-500">*</span></label>
                            <select
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">8</option>
                                <option value="">9</option>
                                <option value="">10</option>
                                <option value="">11</option>
                                <option value="">12</option>
                            </select>
                        </div>
                        <div class="">
                            <label class="block text-sm font-medium text-gray-600 mb-1">How did you hear about us? <span
                                    class="text-red-500">*</span></label>
                            <select
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Social Media</option>
                                <option value="">Word of mouth</option>
                                <option value="">WYN Academy Website</option>
                                <option value="">Other</option>
                            </select>
                        </div>
                        <div class=""></div>
                        <div class=""></div>

                        <div class="flex justify-end">
                            <a href="{{route('page-1')}}"
                            class="px-5 py-2.5 text-sm antialiased font-semibold bg-[#285a49] text-white rounded-lg">Next</a>

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
</div>
