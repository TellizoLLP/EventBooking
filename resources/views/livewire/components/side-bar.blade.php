<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class='sidebar-brand ' href='index.html'>
            <span class="sidebar-brand-text align-middle">
            <i class="align-middle me-2 fas fa-fw fa-book-reader"></i>  WYN ACADEMY
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
                PAGES
            </li>

            <li class="sidebar-item">
                <a class='sidebar-link' href=''>
                    <i class="align-middle" data-feather="clock"></i>
                    <span class="align-middle">Sessions</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href=''>
                    <i class="align-middle" data-feather="tablet"></i>
                    <span class="align-middle">Micro-Courses</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href=''>
                    <i class="align-middle" data-feather="calendar"></i>
                    <span class="align-middle">Bookings</span>
                </a>
            </li>

            <li class="sidebar-header">
                GENERAL
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="bar-chart-2"></i>
                    <span class="align-middle">Reports</span>
                </a>
                <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='index.html'>Bookings Report</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='dashboard-ecommerce.html'>Sessions Report</a></li>
                </ul>
            </li>

            <li class="sidebar-header">
                TOOLS
            </li>

            <li class="sidebar-item">
                <a class='sidebar-link' href=''>
                    <i class="align-middle" data-feather="users"></i>
                    <span class="align-middle">Registered Users</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href=''>
                    <i class="align-middle" data-feather="settings"></i>
                    <span class="align-middle">Settings</span>
                </a>
            </li>
        </ul>

    </div>
</nav>