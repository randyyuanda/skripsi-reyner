<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="/images/faces/face1.jpg" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
                    <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item {{ ($title === 'dashboard-admin') ? 'active' : ''}}">
            <a class="nav-link" href="/dashboard-admin">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item {{ ($title === 'list-klien') ? 'active' : ''}}">
            <a class="nav-link" href="/list-klien">
                <span class="menu-title">List Klien</span>
                <i class="mdi mdi mdi-account-card-details menu-icon"></i>
            </a>
        </li>

        <li class="nav-item {{ ($title === 'list-admin') ? 'active' : ''}}">
            <a class="nav-link" href="/list-admin">
                <span class="menu-title">List Admin</span>
                <i class="mdi mdi mdi-account-card-details menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/all-book">
                <span class="menu-title">All Booking</span>
                <i class="mdi mdi-library-books menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>