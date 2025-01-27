<main class="content p-3">
    <div class="container-fluid p-0">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center border-bottom pb-2">
                    <h2 class="card-title mb-0">Registrations List</h2>
                </div>
                <div class="p-3 d-flex justify-content-between align-items-center">

                    <div class="input-group input-group-navbar w-25">
                        <input type="text" class="form-control" placeholder="Search…" aria-label="Search"
                            wire:model.live="search">
                        <button class="btn" type="button">
                            <i class="align-middle" data-feather="search"></i>
                        </button>
                    </div>
                </div>
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr class="text-center">
                            <th>Sl No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Current Status</th>
                            <th>Sessions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registrations as $item)
                        <tr class="text-center">
                            <td>{{$loop->index+1}}</td>
                            <td>{{$item->first_name}} {{$item->last_name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td>
                                <span class="badge {{ $item->current_status == 1 ? 'bg-success' : 'bg-warning' }}">
                                    {{ $item->current_status == 1 ? 'Student' : 'Parent' }}
                                </span>
                            </td>
                            <td>
                                @php
                                $current_registration_id = $item['id'];
                                $items = \App\Models\EventRegistrationSession::where('event_registration_id', $current_registration_id)->where('course_id', 1)->latest()->get();
                                $itemsMicro = \App\Models\EventRegistrationSession::where('event_registration_id', $current_registration_id)->where('course_id', 2)->latest()->get();
                                $itemsAdditional = \App\Models\EventRegistrationSession::where('event_registration_id', $current_registration_id)->where('course_id', 3)->latest()->get();
                                @endphp

                                <div class="session-wrapper">
                                    {{-- Loop through all session categories and display in a single row --}}
                                    <div class="row flex-nowrap">
                                        {{-- Loop through $items (Standard Sessions) --}}
                                        @if ($items->count() > 0)
                                        @foreach ($items as $session)
                                        @php
                                        $roomIndex = $session->room_id;
                                        $selectedSession = collect($rooms[$roomIndex]['sessions'])->firstWhere('id', $session->session_id);
                                        $sessionDetails = $selectedSession
                                        ? ['roomName' => $rooms[$roomIndex]['roomName'] ?? 'Unknown Room', 'sessionName' => $selectedSession['name'] ?? 'Unknown Session', 'startTime' => $selectedSession['start_time'] ?? 'N/A', 'endTime' => $selectedSession['end_time'] ?? 'N/A']
                                        : null;
                                        @endphp

                                        <div class="col-md-3 mb-3">
                                            <div class="card" style="border: 1px solid #ddd; height: 100%; padding: 5px;">
                                                <div class="card-body p-2">
                                                    @if ($sessionDetails)
                                                    <h6 class="card-title" style="font-size: 14px;">{{ $sessionDetails['roomName'] }}</h6>
                                                    <p class="card-text" style="font-size: 12px; line-height: 1.2;">
                                                        <strong>Session:</strong> {{ $sessionDetails['sessionName'] }}<br>
                                                        <strong>Time:</strong> {{ $sessionDetails['startTime'] }} - {{ $sessionDetails['endTime'] }}
                                                    </p>
                                                    @else
                                                    <p class="card-text" style="font-size: 12px; line-height: 1.2;">Room: Unknown, Session: Unknown</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif

                                        {{-- Loop through $itemsMicro (Micro Sessions) --}}
                                        @if ($itemsMicro->count() > 0)
                                        @foreach ($itemsMicro as $session)
                                        @php
                                        $roomIndex = $session->room_id;
                                        $selectedSession = collect($Mainrooms[$roomIndex]['sessions'])->firstWhere('id', $session->session_id);
                                        $sessionDetails = $selectedSession
                                        ? ['roomName' => $Mainrooms[$roomIndex]['roomName'] ?? 'Unknown Room', 'sessionName' => $selectedSession['name'] ?? 'Unknown Session', 'startTime' => $selectedSession['start_time'] ?? 'N/A', 'endTime' => $selectedSession['end_time'] ?? 'N/A']
                                        : null;
                                        @endphp

                                        <div class="col-md-3 mb-3">
                                            <div class="card" style="border: 1px solid #ddd; height: 100%; padding: 5px;">
                                                <div class="card-body p-2">
                                                    @if ($sessionDetails)
                                                    <h6 class="card-title" style="font-size: 14px;">{{ $sessionDetails['roomName'] }}</h6>
                                                    <p class="card-text" style="font-size: 12px; line-height: 1.2;">
                                                        <strong>Session:</strong> {{ $sessionDetails['sessionName'] }}<br>
                                                        <strong>Time:</strong> {{ $sessionDetails['startTime'] }} - {{ $sessionDetails['endTime'] }}
                                                    </p>
                                                    @else
                                                    <p class="card-text" style="font-size: 12px; line-height: 1.2;">Room: Unknown, Session: Unknown</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif

                                        {{-- Loop through $itemsAdditional (Additional Sessions) --}}
                                        @if ($itemsAdditional->count() > 0)
                                        @foreach ($itemsAdditional as $session)
                                        @php
                                        $roomIndex = $session->room_id;
                                        $selectedSession = collect($Additionalrooms[$roomIndex]['sessions'])->firstWhere('id', $session->session_id);
                                        $sessionDetails = $selectedSession
                                        ? ['roomName' => $Additionalrooms[$roomIndex]['roomName'] ?? 'Unknown Room', 'sessionName' => $selectedSession['name'] ?? 'Unknown Session', 'startTime' => $selectedSession['start_time'] ?? 'N/A', 'endTime' => $selectedSession['end_time'] ?? 'N/A']
                                        : null;
                                        @endphp

                                        <div class="col-md-3 mb-3">
                                            <div class="card" style="border: 1px solid #ddd; height: 100%; padding: 5px;">
                                                <div class="card-body p-2">
                                                    @if ($sessionDetails)
                                                    <h6 class="card-title" style="font-size: 14px;">{{ $sessionDetails['roomName'] }}</h6>
                                                    <p class="card-text" style="font-size: 12px; line-height: 1.2;">
                                                        <strong>Session:</strong> {{ $sessionDetails['sessionName'] }}<br>
                                                        <strong>Time:</strong> {{ $sessionDetails['startTime'] }} - {{ $sessionDetails['endTime'] }}
                                                    </p>
                                                    @else
                                                    <p class="card-text" style="font-size: 12px; line-height: 1.2;">Room: Unknown, Session: Unknown</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</main>