<main class="content p-3">
    <div class="container-fluid p-0">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center border-bottom pb-2">
                    <h2 class="card-title mb-0">Manage Sessions</h2>
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
                        <button wire:click="export" class="btn btn-outline-secondary">
                            <i class="me-1 fas fa-file-csv"></i>Add Session
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
</main>
