<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
  <div class="navbar-brand">
    <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
    <a href="index.html"><img src="{{ asset('assets/images/logo.svg') }}" width="25" alt="Aero"><span class="m-l-10">Aero</span></a>
  </div>
  <div class="menu">
    <ul class="list">
      <li>
        <div class="user-info">
          <a class="image" href="profile.html"><img src="{{ asset('assets/images/profile_av.jpg') }}" alt="User"></a>
          <div class="detail">
            <h4>{{ Auth::user()->name }}</h4>
            <small>{{ Auth::user()->role === 3 ? "Owner" : (Auth::user()->role === 2 ? "Manager" : "Cashier") }}</small>
          </div>
        </div>
      </li>
      <li class="{{ Request::segment(1) === 'dashboard' ? 'active open' : null }}">
        <a href="{{ url('dashboard') }}">
          <i class="zmdi zmdi-home"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="{{ Request::segment(1) === 'users' ? 'active open' : null }}">
        <a href="{{ url('users') }}">
          <i class="fa fa-users"></i>
          <span>Users</span>
        </a>
      </li>
      <li class="{{ Request::segment(1) === 'tasks' ? 'active open' : null }}">
        <a href="{{ url('tasks') }}">
          <i class="fa fa-tasks"></i>
          <span>Taskboard</span>
        </a>
      </li>
      <li class="{{ Request::segment(1) === 'customer' ? 'active open' : null }}">
        <a href="{{ url('customer') }}">
          <i class="fa fa-user-secret"></i>
          <span>Customer</span>
        </a>
      </li>
      <li class="{{ Request::segment(1) === 'product' ? 'active open' : null }}">
        <a href="{{ url('product') }}">
          <i class="fa fa-cubes"></i>
          <span>Products</span>
        </a>
      </li>
      <li class="{{ Request::segment(1) === 'report' ? 'active open' : null }}">
        <a href="{{ url('report') }}">
          <i class="fa fa-book"></i>
          <span>Reports</span>
        </a>
      </li>
      <li class="{{ Request::segment(1) === 'settings' ? 'active open' : null }}">
        <a href="{{ url('settings') }}">
          <i class="fa fa-gear"></i>
          <span>Settings</span>
        </a>
      </li>
      <li>
        <a href="{{url('logout')}}" class="mega-menu" title="Sign Out" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <i class="zmdi zmdi-power"></i>
          <span>Sign Out</span>
        </a>
        <form id="logout-form" action="{{url('logout')}}" method="post" style="display: none;">
          {{csrf_field()}}
        </form>
      </li>
      <li>
        <div class="progress-container progress-primary m-t-10">
          <span class="progress-badge">Traffic this Month</span>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
              <span class="progress-value">67%</span>
            </div>
          </div>
        </div>
        <div class="progress-container progress-info">
          <span class="progress-badge">Server Load</span>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
              <span class="progress-value">86%</span>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</aside>