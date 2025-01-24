<main class="content p-3">
    <div class="container-fluid p-0">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center border-bottom pb-2">
                    <h2 class="card-title mb-0"> Student Sessions</h2>
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
                        <button wire:click="" class="btn btn-outline-secondary" data-bs-toggle="modal"
                            data-bs-target="#centeredModalPrimary">
                            <i class="me-1 fas fa-plus"></i>Add Session
                        </button>
                        {{-- <button class="btn btn-outline-secondary"><i class="me-1 fas fa-print"></i>Print</button> --}}
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Type </th>
                            <th>Session </th>
                            <th>Time Slot</th>
                            <th>Seat Limit</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Mircro Course</td>
                            <td>How to build your portfolio</td>
                            <td>Session 1</td>
                            <td>10:00AM - 12:00PM </td>
                            <td>40</td>
                            <td>
                                {{-- <a class="menu-link" href="{{ route('expenses.manage', $expense->id) }}"> --}}
                                <i class="align-middle far fa-fw fa-edit fa-lg text-primary"></i>
                                {{-- <a class="menu-link" wire:click.prevent="deleteExpense({{ $expense->id }})"> --}}
                                <i class="align-middle fas fa-fw fa-trash fa-lg text-primary"></i>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>

                        <tr>
                            <td>Speciality Course</td>
                            <td>Pharmacy</td>
                            <td>Session 1</td>
                            <td>10:00AM - 12:00PM </td>
                            <td>40</td>
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
            <div class="modal fade" id="centeredModalPrimary" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Session</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="card-body p-3">
                            <div class="mb-3">
                                <label class="form-label" for="inputEmail4">Courses <span class="text-danger">*</span></label>
                                <select class="form-select" id="notyf-role" name="notyf-role"
                                    wire:model="gender">
                                    <option value="1" selected>Speciality Course</option>
                                    <option value="2">Micro Course</option>
                                    <option value="2">Additional Course</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="inputEmail4">Type <span class="text-danger">*</span></label>
                                <select class="form-select" id="notyf-role" name="notyf-role"
                                    wire:model="gender">
                                    <option value="1" selected>Pharmacy</option>
                                    <option value="2">Medicine</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Start Time <span class="text-danger">*</span></label>
                                <input type="time" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">End Time <span class="text-danger">*</span></label>
                                <input type="time" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Seat Limit <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" placeholder="Enter seat limit">
                            </div>
                            {{-- <div class="mb-3">
                                <label class="form-label">File input</label>
                                <input class="form-control" type="file">
                            </div> --}}
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
