<main class="content">
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Dashboard</strong></h3>
            </div>


        </div>
        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Total Sessions</h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="clock"></i>

                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">20</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Micro-Courses</h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="activity"></i>

                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">15</h1>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Total Bookings</h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="calendar"></i>

                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">10</h1>
                        <!-- <div class="mb-0">
                            <span class="badge badge-success-light">4.65%</span>
                            <span class="text-muted">Since last week</span>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Available Seats</h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="users"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">40</h1>
                        <!-- <div class="mb-0">
                            <span class="badge badge-success-light">2.35%</span>
                            <span class="text-muted">Since last week</span>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8 d-flex">
                <div class="card flex-fill w-100">
                    <div class="card-header">
                        <div class="float-end">
                            <form class="row g-2">
                                <div class="col-auto">
                                    <select class="form-select form-select-sm bg-light border-0">
                                        <option>Jan</option>
                                        <option value="1">Feb</option>
                                        <option value="2">Mar</option>
                                        <option value="3">Apr</option>
                                    </select>
                                </div>
                                <div class="col-auto">
                                    <input type="text" class="form-control form-control-sm bg-light rounded-2 border-0" style="width: 100px;"
                                        placeholder="Search..">
                                </div>
                            </form>
                        </div>
                        <h5 class="card-title mb-0">Total Revenue</h5>
                    </div>
                    <div class="card-body pt-2 pb-3">
                        <div class="chart chart-md">
                            <canvas id="chartjs-dashboard-line"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 d-flex">
                <div class="card flex-fill w-100">
                    <div class="card-header">
                        <div class="float-end">
                            <form class="row g-2">
                                <div class="col-auto">
                                    <select class="form-select form-select-sm bg-light border-0">
                                        <option>Jan</option>
                                        <option value="1">Feb</option>
                                        <option value="2">Mar</option>
                                        <option value="3">Apr</option>
                                    </select>
                                </div>
                                <div class="col-auto">
                                    <input type="text" class="form-control form-control-sm bg-light rounded-2 border-0" style="width: 100px;"
                                        placeholder="Search..">
                                </div>
                            </form>
                        </div>
                        <h5 class="card-title mb-0">Sales by State</h5>
                    </div>
                    <div class="card-body px-4">
                        <div id="usa_map" style="height:294px;"></div>
                    </div>
                </div>
            </div>
        </div>

      

    </div>
</main>