<main class="content p-3">
    <div class="container-fluid p-0">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center border-bottom pb-2">
                    <h2 class="card-title mb-0">Registrations Report</h2>
                </div>

                <table class="table table-bordered mt-4">
                    <thead>
                        <tr class="text-center">

                            <th>Total Registrations</th>
                            <th>Total Students</th>
                            <th>Total Parents</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">

                            <td>
                                <span class="badge bg-primary">{{$total_registrations}}</span>
                            </td>
                            <td>
                                <span class="badge bg-success">{{$students}}</span>
                            </td>
                            <td>
                                <span class="badge bg-success">{{$parents}}</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>