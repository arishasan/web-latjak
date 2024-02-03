<div id="sidebar" class="app-sidebar bg-white">
  <!-- BEGIN scrollbar -->
  <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
    <!-- BEGIN menu -->
    <div class="menu">
      <div class="menu-header">Navigation</div>
      <div class="menu-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}" class="menu-link">
          <span class="menu-icon"><i class="fa fa-home"></i></span>
          <span class="menu-text">Dashboard</span>
        </a>
      </div>
      
      <div class="menu-item {{ Request::is('devices') ? 'active' : '' }}">
        <a href="{{ route('devices-data') }}" class="menu-link">
          <span class="menu-icon"><i class="fa fa-laptop"></i></span>
          <span class="menu-text">Devices</span>
        </a>
      </div>

      <div class="menu-item {{ Request::is('users') ? 'active' : '' }}">
        <a href="{{ route('users-data') }}" class="menu-link">
          <span class="menu-icon"><i class="fa fa-users"></i></span>
          <span class="menu-text">Manage Users</span>
        </a>
      </div>

      {{-- 

      <div class="menu-item">
        <a href="#" class="menu-link">
          <span class="menu-icon"><i class="fa fa-credit-card"></i></span>
          <span class="menu-text">Payment</span>
        </a>
      </div>

      <div class="menu-item">
        <a href="#" class="menu-link">
          <span class="menu-icon"><i class="fa fa-suitcase"></i></span>
          <span class="menu-text">Contracts</span>
        </a>
      </div>

      <div class="menu-item">
        <a href="#" class="menu-link">
          <span class="menu-icon"><i class="fa fa-book"></i></span>
          <span class="menu-text">Leave</span>
        </a>
      </div>

      <div class="menu-item">
        <a href="#" class="menu-link">
          <span class="menu-icon"><i class="fa fa-book"></i></span>
          <span class="menu-text">Claims</span>
        </a>
      </div>

      <div class="menu-item">
        <a href="#" class="menu-link">
          <span class="menu-icon"><i class="fa fa-archive"></i></span>
          <span class="menu-text">Inventory</span>
        </a>
      </div>

      <div class="menu-item">
        <a href="#" class="menu-link">
          <span class="menu-icon"><i class="fa fa-th-list"></i></span>
          <span class="menu-text">Perfomance Appraisal</span>
        </a>
      </div>

      <div class="menu-item">
        <a href="#" class="menu-link">
          <span class="menu-icon"><i class="fa fa-sticky-note"></i></span>
          <span class="menu-text">Reports</span>
        </a>
      </div>

      <div class="menu-item">
        <a href="#" class="menu-link">
          <span class="menu-icon"><i class="fa fa-bell"></i></span>
          <span class="menu-text">Compliance</span>
        </a>
      </div>

      <div class="menu-item">
        <a href="#" class="menu-link">
          <span class="menu-icon"><i class="fa fa-bank"></i></span>
          <span class="menu-text">Bank</span>
        </a>
      </div> --}}

      <div class="p-3 px-4 mt-auto hide-on-minified">
        <a href="../../documentation/index.html" class="btn btn-secondary d-block w-100 fw-600 rounded-pill">
          <i class="fa fa-code-branch me-1 ms-n1 opacity-5"></i> Documentation
        </a>
      </div>
    </div>
    <!-- END menu -->
  </div>
  <!-- END scrollbar -->
  
  <!-- BEGIN mobile-sidebar-backdrop -->
  <button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>
  <!-- END mobile-sidebar-backdrop -->
</div>