<main class="content">
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Dashboard</strong></h3>
            </div>


        </div>
        <div class="row">
           
            
            <div class="col-sm-6 col-xl-3">
                <div class="card h-75">
                    <div class="card-body d-flex justify-content-between align-items-center ">

                        <div style="height: 95%; width: 40%;" class="bg-warning d-flex justify-content-center align-items-center rounded  ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24">
                                <rect width="14" height="0" x="5" y="5" fill="#f7f9ff">
                                    <animate fill="freeze" attributeName="height" begin="0.6s" dur="0.2s" values="0;3" />
                                </rect>
                                <g fill="none" stroke="#f7f9ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path stroke-dasharray="64" stroke-dashoffset="64" d="M12 4h7c0.55 0 1 0.45 1 1v14c0 0.55 -0.45 1 -1 1h-14c-0.55 0 -1 -0.45 -1 -1v-14c0 -0.55 0.45 -1 1 -1Z">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0" />
                                    </path>
                                    <path stroke-dasharray="4" stroke-dashoffset="4" d="M7 4v-2M17 4v-2">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.6s" dur="0.2s" values="4;0" />
                                    </path>
                                    <path stroke-dasharray="12" stroke-dashoffset="12" d="M7 11h10">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.8s" dur="0.2s" values="12;0" />
                                    </path>
                                    <path stroke-dasharray="8" stroke-dashoffset="8" d="M7 15h7">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="1s" dur="0.2s" values="8;0" />
                                    </path>
                                </g>
                            </svg>
                        </div>

                        <div class="d-flex flex-column justify-content-center align-items-center ">

                            <div class="col">
                                <h5 class="card-title">Total Registrations</h5>
                            </div>
                            <h1 class="mt-1 mb-3">{{$bookings}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <main class="content p-3">
    <div class="container-fluid p-0">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center border-bottom pb-2">
                    <h2 class="card-title mb-0">Recent Registration</h2>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                           
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $slNo = 1; @endphp
                        <!-- Students -->
                        @foreach ($students as $item)
                            <tr>
                                
                                <td>{{ $item->first_name }}</td>
                                <td>{{ $item->last_name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>
                                    <span class="badge bg-success">Student</span>
                                </td>
                            </tr>
                        @endforeach

                        <!-- Parents -->
                        @foreach ($parents as $item)
                            <tr>
                              
                                <td>{{ $item->first_name }}</td>
                                <td>{{ $item->last_name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>
                                    <span class="badge bg-warning">Parent</span>
                                </td>
                            </tr>
                        @endforeach

                        @if ($students->isEmpty() && $parents->isEmpty())
                            <tr>
                                <td colspan="6" class="text-center">No records found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>



    </div>
</main>