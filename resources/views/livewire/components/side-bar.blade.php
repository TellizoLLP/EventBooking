<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class='sidebar-brand ' href='index.html'>
            <span class="sidebar-brand-text align-middle">
                <i class="align-middle me-2 fas fa-fw fa-book-reader"></i> WYN ACADEMY
            </span>
            <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24"
                fill="none" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="miter"
                color="#FFFFFF" style="margin-left: -3px">
                <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                <path d="M20 12L12 16L4 12"></path>
                <path d="M20 16L12 20L4 16"></path>
            </svg>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a class='sidebar-link' href="{{route('dashboard')}}">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-header">
                GENERAL
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href="{{route('registrations')}}">
                    <i class="align-middle" data-feather="calendar"></i>
                    <span class="align-middle">Registrations</span>
                </a>
            </li>
            <li class="sidebar-header">
                    REPORTS
                </a>
                <li class="sidebar-item">
                    <a class='sidebar-link' href="{{route('registrations')}}">
                        <i class="align-middle" data-feather="calendar"></i>
                        <span class="align-middle">Booking Report</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class='sidebar-link' href="{{route('registrations')}}">
                        <i class="align-middle" data-feather="calendar"></i>
                        <span class="align-middle">Room Wise Report</span>
                    </a>
                </li>
            </li>
            <li class="sidebar-header">
                TOOLS
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' wire:click="logout">
                    <i class="align-middle" data-feather="log-out"></i>
                    <span class="align-middle">Logout</span>
                </a>
            </li>

        </ul>
    </div>
</nav>