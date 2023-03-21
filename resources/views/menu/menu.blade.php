<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <!-- <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="/images/faces/face1.jpg" alt="profile">
          <span class="login-status online"></span>
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
          <span class="text-secondary text-small">Project Manager</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li> -->
    <li class="sidebar-actions" style="margin-left:15px; margin-right:15px;margin-top: 15px;">
      <a class="nav-link" href="/create-booking">
        <button class="btn btn-block btn-lg btn-gradient-primary">+ New Booking</button>
      </a>
    </li>
    <li class="nav-item {{ ($title === 'home') ? 'active' : ''}}">
      <a class="nav-link" href="/home">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="nav-item {{ ($title === 'listbooking') ? 'active' : ''}}">
      <a class="nav-link" href="/list-booking">
        <span class="menu-title">My Bookings</span>
        <!-- <i class="menu-arrow"></i> -->
        <i class="mdi mdi mdi-library-books menu-icon"></i>
      </a>
      <!-- <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ ($title === 'listbooking') ? 'active' : ''}}"> <a class="nav-link" href="/list-booking">All Shipment</a></li>
          <li class="nav-item {{ ($title === 'completeshipment') ? 'active' : ''}}"> <a class="nav-link" href="">Complete Shipment</a></li>
        </ul>
      </div> -->
    </li>
  </ul>
</nav>