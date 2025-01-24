<div class="h-screen w-screen flex flex-col overflow-clip bg-gray-100">
    <!-- Header -->
    <div class="w-full flex items-center justify-center py-5 px-5 bg-gray-100">
        <img src="{{ asset('assets/img/Logo@4x.png') }}" class="h-20" alt="Youth Medical Forum Logo">
    </div>

    <!-- Main Content -->
    <div class="w-full h-full overflow-y-auto">
        <div class="p-6 bg-gray-100 space-y-6">
            <!-- Summary Container -->
            <div class="l mx-auto bg-white rounded-lg shadow-lg">
                <!-- Header Section -->
                <div class="bg-green-500 text-white text-center py-6 px-4 rounded-t-lg">
                    <h1 class="text-2xl font-bold">Registration Summary</h1>
                    <p class="text-lg mt-2">Thank you for registering with <span class="font-semibold">Youth Medical Forum</span>!</p>
                </div>

                <!-- Content Section -->
                <div class="p-6 space-y-6">
                    <!-- Greeting -->
                    <div class="text-center">
                        <p class="text-gray-800 text-lg">
                            <span class="font-semibold">{{ $event->first_name }} {{ $event->last_name }}</span>, we’re excited to have you join us!
                        </p>
                        <p class="text-gray-700 mt-2">
                            Here’s a quick summary of the details you provided:
                        </p>
                    </div>

                    <!-- Details Section -->
                    <div class="space-y-4 grid grid-cols-2 gap-4">
                        <!-- Detail Item -->
                        <div class="flex items-center bg-gray-50 rounded-lg p-4 shadow-sm">
                            <div class="flex-1">
                                <p class="text-sm text-gray-500">First Name</p>
                                <p class="text-gray-800 font-medium">{{ $event->first_name }}</p>
                            </div>
                        </div>
                        <div class="flex items-center bg-gray-50 rounded-lg p-4 shadow-sm">
                            <div class="flex-1">
                                <p class="text-sm text-gray-500">Last Name</p>
                                <p class="text-gray-800 font-medium">{{ $event->last_name }}</p>
                            </div>
                        </div>
                        <div class="flex items-center bg-gray-50 rounded-lg p-4 shadow-sm">
                            <div class="flex-1">
                                <p class="text-sm text-gray-500">Email</p>
                                <p class="text-gray-800 font-medium">{{ $event->email }}</p>
                            </div>
                        </div>
                        <div class="flex items-center bg-gray-50 rounded-lg p-4 shadow-sm">
                            <div class="flex-1">
                                <p class="text-sm text-gray-500">Phone</p>
                                <p class="text-gray-800 font-medium">{{ $event->phone }}</p>
                            </div>
                        </div>
                        <div class="flex items-center bg-gray-50 rounded-lg p-4 shadow-sm">
                            <div class="flex-1">
                                <p class="text-sm text-gray-500">Current Status</p>
                                <p class="text-gray-800 font-medium">{{ $event->current_status ==1 ? 'Student' : 'Parent' }}</p>
                            </div>
                        </div>

                        @if($event->school_name)
                        <div class="flex items-center bg-gray-50 rounded-lg p-4 shadow-sm">
                            <div class="flex-1">
                                <p class="text-sm text-gray-500">School Name</p>
                                <p class="text-gray-800 font-medium">{{ $event->school_name }}</p>
                            </div>
                        </div>
                        @endif

                        @if($event->school_grade)
                        <div class="flex items-center bg-gray-50 rounded-lg p-4 shadow-sm">
                            <div class="flex-1">
                                <p class="text-sm text-gray-500">School Grade</p>
                                <p class="text-gray-800 font-medium">{{ $event->school_grade }}</p>
                            </div>
                        </div>
                        @endif

                        @if($event->referral_method)
                        <div class="flex items-center bg-gray-50 rounded-lg p-4 shadow-sm">
                            <div class="flex-1">
                                <p class="text-sm text-gray-500">Referral Method</p>
                                <p class="text-gray-800 font-medium">{{ $event->referral_method }}</p>
                            </div>
                        </div>
                        @endif
                    </div>

                    <!-- CTA -->
                    <div class="text-center">
                        <p class="text-gray-700">
                            If any of these details are incorrect or need to be updated, please contact us.
                        </p>
                        <p class="text-gray-700 mt-4">
                            <a href="#" class="text-green-500 font-semibold hover:underline">Contact Support</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Footer Section -->
            <div class="text-center text-sm text-gray-600 mt-6">
                <p>© {{ date('Y') }} Youth Medical Forum. All rights reserved.</p>
                <p>
                    <a href="#" class="text-green-500 hover:underline">Privacy Policy</a> |
                    <a href="#" class="text-green-500 hover:underline">Terms of Service</a>
                </p>
            </div>
        </div>
    </div>
</div>
