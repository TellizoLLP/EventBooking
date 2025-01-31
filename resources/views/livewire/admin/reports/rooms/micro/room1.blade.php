<main class="content p-3">
    <div class="container-fluid p-0">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center border-bottom pb-2">
                    <h2 class="card-title mb-0">Room 6</h2>
                </div>
                <div class="p-3 d-flex justify-content-between align-items-center">

                    <div class="input-group input-group-navbar w-25">
                        <input type="text" class="form-control" placeholder="Search…" aria-label="Search"
                            wire:model.live="search">
                        <button class="btn" type="button">
                            <i class="align-middle" data-feather="search"></i>
                        </button>
                    </div>
                    
                    <a wire:click="downloadFile()" class="btn btn-icon btn-3 btn-primary text-white mb-0">
                <i class="fa fa-file-excel-o me-2"></i> {{ $lang->data['export_excel'] ?? 'Export Excel' }}
            </a>
            
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