<main class="content p-3">
    <div class="container-fluid p-0">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center border-bottom pb-2">
                    <h2 class="card-title mb-0">Specialities</h2>
                </div>
                <div class="p-3 d-flex justify-content-between align-items-center">

                    <div class="input-group input-group-navbar w-25">
                        <input type="text" class="form-control" placeholder="Search…" aria-label="Search"
                            wire:model.live="search">
                        <button class="btn" type="button">
                            <i class="align-middle" data-feather="search"></i>
                        </button>
                    </div>
                    <div>
                        <button wire:click="" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#centeredModalPrimary">
                            <i class="me-1 fas fa-file-csv"></i>Add Speciality
                        </button>
                        {{-- <button class="btn btn-outline-secondary"><i class="me-1 fas fa-print"></i>Print</button> --}}
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Session 1</td>
                            <td>$120</td>
                            <td>Sample </td>
                            <td>Sample</td>
                            <td>
                                {{-- <a class="menu-link" href="{{ route('expenses.manage', $expense->id) }}"> --}}
                                <i class="align-middle far fa-fw fa-edit fa-lg text-primary"></i>
                                {{-- <a class="menu-link" wire:click.prevent="deleteExpense({{ $expense->id }})"> --}}
                                <i class="align-middle fas fa-fw fa-trash fa-lg text-primary"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Add speciality Modal -->
    <div class="modal fade" id="centeredModalPrimary" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Speciality</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-body p-3">
                <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Enter speciality name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Room/Studio</label>
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</main>