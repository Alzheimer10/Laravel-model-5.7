<div class="main-navbar sticky-top bg-white">
  <!-- Main Navbar -->
  <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
    <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
      <div class="input-group input-group-seamless ml-3">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fas fa-search"></i>
          </div>
        </div>
        <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
    </form>
    <ul class="navbar-nav border-left flex-row ">
      <li class="nav-item border-right dropdown notifications">
        <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="nav-link-icon__wrapper">
            <i class="material-icons">&#xE7F4;</i>
            <span class="badge badge-pill badge-danger">1</span>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">
            <div class="notification__icon-wrapper">
              <div class="notification__icon">
                <i class="material-icons">&#xE6E1;</i>
              </div>
            </div>
            <div class="notification__content">
              <span class="notification__category">Analytics</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                <span class="text-success text-semibold">28%</span>  Fugiat saepe tenetur enim libero!</p>
            </div>
          </a>
          <a class="dropdown-item notification__all text-center" href="#"> View all Notifications </a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <img class="user-avatar rounded-circle mr-2" src="{{ asset('images/avatars/0.jpg') }}" alt="User Avatar">
          @if(Auth::guard('customer')->check())
            <span class="d-none d-md-inline-block">{{ Auth::guard('customer')->user()->name }} {{ Auth::guard('customer')->user()->lastname }}</span>
          @endif
        </a>
        <div class="dropdown-menu dropdown-menu-small">
          <a class="dropdown-item" href="{{ route('customer.profile') }}">
            <i class="material-icons">&#xE7FD;</i> Profile</a>
          <a class="dropdown-item" href="{{ route('about') }}">
            <i class="material-icons">vertical_split</i> about</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-danger" href="{{ route('customer.logout') }}"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="material-icons text-danger">&#xE879;</i> Logout </a>
          </a>
        </div>
        <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
      </li>
    </ul>
    <nav class="nav">
      <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
        <i class="material-icons">&#xE5D2;</i>
      </a>
    </nav>
  </nav>
</div>