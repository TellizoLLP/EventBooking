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
                        <tr>
                            <th>Sl No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Current Status</th>
                            <th>Sessions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registrations as $item )
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$item->first_name}} {{$item->last_name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td> {{ $item->current_status == 1 ? 'Student' : 'Parent' }}</td>
                            <td>
                                @foreach ($item->eventRegistrationSessions as $session)
                                @php
                                // Get room index from session's room_id
                                $roomIndex = $session->room_id;

                                // Safe fetch for session data from rooms array
                                $selectedSession = $rooms[$roomIndex]['sessions'][$session->session_id] ?? null;

                                // Fetch session details from Mainrooms array if not found in rooms array
                                $selectedMainSession = $Mainrooms[$roomIndex]['sessions'][$session->session_id] ?? null;
                                $selectedAdditionalSession = $Additionalrooms[$roomIndex]['sessions'][$session->session_id] ?? null;
                                // Prepare session details, checking both rooms and Mainrooms
                                $sessionDetails = null;

                                // First, check if the session is in rooms
                                $sessionDetails = [
                                'roomName' => $rooms[$roomIndex]['roomName'] ?? 'Unknown Room',
                                'sessionName' => $selectedSession['name'] ?? 'Unknown Session',
                                'startTime' => $selectedSession['start_time'] ?? 'N/A',
                                'endTime' => $selectedSession['end_time'] ?? 'N/A',
                                ];

                                // Then, check if the session is in Mainrooms and update sessionDetails if it's not already set
                                if (!$sessionDetails) {
                                $sessionDetails = [
                                'roomName' => $Mainrooms[$roomIndex]['roomName'] ?? 'Unknown Room',
                                'sessionName' => $selectedMainSession['name'] ?? 'Unknown Session',
                                'startTime' => $selectedMainSession['start_time'] ?? 'N/A',
                                'endTime' => $selectedMainSession['end_time'] ?? 'N/A',
                                ];
                               
                                }

                                if(!$sessionDetails){
                                    $sessionDetails = [
                                    'roomName' => $Additionalrooms[$roomIndex]['roomName'] ?? 'Unknown Room',
                                    'sessionName' => $selectedAdditionalSession['name'] ?? 'Unknown Session',
                                    'startTime' => $selectedAdditionalSession['start_time'] ?? 'N/A',
                                    'endTime' => $selectedAdditionalSession['end_time'] ?? 'N/A',
                                    ];
                                }

                                @endphp

                                @if ($sessionDetails)
                                <p>Room: {{ $sessionDetails['roomName'] }}, Session: {{ $sessionDetails['sessionName'] }} ({{ $sessionDetails['startTime'] }} - {{ $sessionDetails['endTime'] }})</p>
                                @else
                                <p>Room: Unknown, Session: Unknown </p>
                                @endif
                                @endforeach

                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>