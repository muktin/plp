  <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}"> <img alt="image" src="{{ url('assets/img/logo.png') }}" class="header-logo" /> <span
                class="logo-name">PLP</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            
            <li class="dropdown active">
              <a href="{{ route('admin.dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <li class="dropdown">
              <a href="{{ route('admin.master_course.view') }}" class="nav-link"><i class="fas fa-book-open"></i><span>Master Course</span></a>
            </li>

            <li class="dropdown">
              <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-database"></i><span>Master SCED</span></a>
            </li>

            <li class="dropdown">
              <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-book"></i><span>Standard By State</span></a>
            </li>

            <li class="dropdown">
              <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-book-open"></i><span>Module By Course</span></a>
            </li>

            <li class="dropdown">
              <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-user"></i><span>Users</span></a>
            </li>

            <li class="dropdown">
              <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fa fa-users"></i><span>Roles</span></a>
            </li>

            <li class="dropdown">
              <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fa fa-lock"></i><span>Permission</span></a>
            </li>

            <!-- <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Masters</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('admin.card_type.view') }}">Card Types</a></li>
              </ul>
            </li> -->
            
          </ul>
        </aside>
      </div>