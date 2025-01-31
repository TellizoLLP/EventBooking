<main class="content p-3">
    <div class="container-fluid p-0">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center border-bottom pb-2">
                    <h2 class="card-title mb-0">Room 4</h2>
                </div>
                <div class="p-3 d-flex justify-content-between align-items-center">

                    <div class="input-group input-group-navbar w-25">
                        <input type="text" class="form-control" placeholder="Search…" aria-label="Search"
                            wire:model.live="search">
                        <button class="btn" type="button">
                            <i class="align-middle" data-feather="search"></i>
                        </button>
                    </div>

                    <div class="input-group input-group-navbar w-25">
                        <select class="form-control"
                            wire:model.live="session_filter">
                            <option value="">All Sessions</option>
                            <option value="1">Session 1</option>
                            <option value="2">Session 2</option>
                            <option value="3">Session 3</option>
                            <option value="4">Session 4</option>
                        </select>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{ $user->eventRegistration?->first_name }} {{$user->eventRegistration?->last_name}}</td>
                            <td>{{ $user->eventRegistration?->email }}</td>
                            <td>{{ $user->eventRegistration?->phone }}</td>
                            <td> <span class="badge {{ $user->eventRegistration?->current_status == 1 ? 'bg-success' : 'bg-warning' }}">{{ $user->eventRegistration?->current_status == 1 ? 'Student' : 'Parent' }}</span></td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>

                <div class="mt-3 px-3">
                    <strong> Total Students:</strong> {{ $total }}
                </div>
            </div>
        </div>

    </div>
</main>