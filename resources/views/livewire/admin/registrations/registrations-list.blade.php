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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registrations as $item )
                        <tr class="text-center">
                            <td>{{$loop->index+1}}</td>
                            <td>{{$item->first_name}} {{$item->last_name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td> {{ $item->current_status == 1 ? 'Student' : 'Parent' }}</td>
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

                                {{-- Loop through $itemsAdditional --}}
                                @if ($itemsAdditional->count() > 0)
                                @foreach ($itemsAdditional as $session)
                                @php
                                $roomIndex = $session->room_id;
                                $selectedSession = collect($Additionalrooms[$roomIndex]['sessions'])->firstWhere('id', $session->session_id);
                                $sessionDetails = $selectedSession
                                ? [
                                'roomName' => $Additionalrooms[$roomIndex]['roomName'] ?? 'Unknown Room',
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
                            </td>


                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>