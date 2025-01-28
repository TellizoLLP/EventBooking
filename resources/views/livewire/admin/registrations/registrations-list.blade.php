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
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>Sl No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Current Status</th>
                            <th>Sessions</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registrations as $item )
                        <tr class="text-center">
                            <td>{{$loop->index+1}}</td>
                            <td>{{$item->first_name}} {{$item->last_name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td> <span class="badge {{ $item->current_status == 1 ? 'bg-success' : 'bg-warning' }}">{{ $item->current_status == 1 ? 'Student' : 'Parent' }}</span></td>
                            <td>
                                @php
                                $current_registration_id = $item['id'];
                                // Get room index from session's room_id
                                $items = \App\Models\EventRegistrationSession::where(
                                'event_registration_id',
                                $current_registration_id,
                                )
                                ->where('course_id', 1)
                                ->latest()
                                ->get();
                                $itemsMicro = \App\Models\EventRegistrationSession::where(
                                'event_registration_id',
                                $current_registration_id,
                                )
                                ->where('course_id', 2)
                                ->latest()
                                ->get();
                                $itemsAdditional = \App\Models\EventRegistrationSession::where(
                                'event_registration_id',
                                $current_registration_id,
                                )
                                ->where('course_id', 3)
                                ->latest()
                                ->get();
                                @endphp

                                {{-- Loop through $items --}}
                                @if ($items->count() > 0)
                                @foreach ($items as $session)
                                @php
                                $roomIndex = $session->room_id;
                                $selectedSession = collect($rooms[$roomIndex]['sessions'])->firstWhere('id', $session->session_id);
                                $sessionDetails = $selectedSession
                                ? [
                                'roomName' => $rooms[$roomIndex]['roomName'] ?? 'Unknown Room',
                                'sessionName' => $selectedSession['name'] ?? 'Unknown Session',
                                'startTime' => $selectedSession['start_time'] ?? 'N/A',
                                'endTime' => $selectedSession['end_time'] ?? 'N/A',
                                ]
                                : null;
                                @endphp

                                @if ($sessionDetails)
                                <p> {{ $sessionDetails['roomName'] }}, Session: {{ $sessionDetails['sessionName'] }} ({{ $sessionDetails['startTime'] }} - {{ $sessionDetails['endTime'] }})</p>
                                @else
                                <p>Room: Unknown, Session: Unknown</p>
                                @endif
                                @endforeach
                                @endif

                                {{-- Loop through $itemsMicro --}}
                                @if ($itemsMicro->count() > 0)
                                @foreach ($itemsMicro as $session)
                                @php
                                $roomIndex = $session->room_id;
                                $selectedSession = collect($Mainrooms[$roomIndex]['sessions'])->firstWhere('id', $session->session_id);
                                $sessionDetails = $selectedSession
                                ? [
                                'roomName' => $Mainrooms[$roomIndex]['roomName'] ?? 'Unknown Room',
                                'sessionName' => $selectedSession['name'] ?? 'Unknown Session',
                                'startTime' => $selectedSession['start_time'] ?? 'N/A',
                                'endTime' => $selectedSession['end_time'] ?? 'N/A',
                                ]
                                : null;
                                @endphp

                                @if ($sessionDetails)
                                <p> {{ $sessionDetails['roomName'] }}, Session: {{ $sessionDetails['sessionName'] }} ({{ $sessionDetails['startTime'] }} - {{ $sessionDetails['endTime'] }})</p>
                                @else
                                <p>Room: Unknown, Session: Unknown</p>
                                @endif
                                @endforeach
                                @endif

                                {{-- Loop through $itemsAdditional (Additional Sessions) --}}
                                @if (count($itemsAdditional) > 0)
                                @foreach ($itemsAdditional as $session)
                                @php
                                // Ensure $session is treated as an array
                                $roomIndex = $session['room_id'] ?? null;

                                // Safeguard against invalid room index
                                $selectedRoom = $roomIndex !== null && isset($Additionalrooms[$roomIndex])
                                ? $Additionalrooms[$roomIndex]
                                : null;

                                // Extract session details
                                $selectedSession = $selectedRoom
                                ? collect($selectedRoom['sessions'])->firstWhere('id', $session['session_id'])
                                : null;

                                // Define session details with fallback values
                                $sessionDetails = $selectedSession
                                ? [
                                'roomName' => $selectedRoom['roomName'] ?? 'Unknown Room',
                                'sessionName' => $selectedSession['name'] ?? 'Unknown Session',
                                'startTime' => $selectedSession['start_time'] ?? 'N/A',
                                'endTime' => $selectedSession['end_time'] ?? 'N/A',
                                ]
                                : ['roomName' => 'Unknown Room', 'sessionName' => 'Unknown Session', 'startTime' => 'N/A', 'endTime' => 'N/A'];
                                @endphp


                                @if ($sessionDetails)
                                <p>{{ $sessionDetails['roomName'] }} , Session : {{ $sessionDetails['sessionName'] }} ({{ $sessionDetails['startTime'] }} - {{ $sessionDetails['endTime'] }})</p>
                                @else
                                <p>Room: Unknown, Session: Unknown</p>
                                @endif

                                @endforeach
                                @endif
            </div>
        </div>
        </td>
        <td>
            <a href="#"  wire:click="confirmDelete({{$item->id}})">
            <svg data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" width="32"
                height="32" viewBox="0 0 128 128">
                <path d="M64 21.433A42.567 42.567 0 1 0 106.567 64 42.615 42.615 0 0 0 64 21.433zm0 80.912A38.345 38.345 0 1 1 102.345 64 38.389 38.389 0 0 1 64 102.345z" />
                <path d="M79.459 48.3a2.11 2.11 0 0 0-2.985 0L64 60.778 51.523 48.3a2.111 2.111 0 1 0-2.985 2.985l12.476 12.478-12.473 12.474a2.111 2.111 0 1 0 2.985 2.985L64 66.748l12.474 12.474a2.111 2.111 0 0 0 2.985-2.985L66.984 63.763l12.475-12.477a2.11 2.11 0 0 0 0-2.986z" />
            </svg>
        </td>
        </td>

        </tr>
        @endforeach

        </tbody>
        </table>
    </div>
    </div>
    </div>
</main>