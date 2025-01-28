    <div class="container-fluid p-0">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center border-bottom pb-2">
                    <h2 class="card-title mb-0">Registrations List</h2>
                </div>
                <div class="p-3 d-flex justify-content-between align-items-center">
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($participants as $item )
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

                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>