 {{-- <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>
      
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('products') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Wisdom</span></a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Admin</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="/profile">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Profile</span></a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
      
      
    </ul> 
  --}}
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile border-bottom">
      <a href="#" class="nav-link flex-column">
        <div class="nav-profile-image">
          <img src="{{asset('assets/images/faces/face1.jpg')}}" alt="profile" />
      {{-- <img src="{{ asset((auth()->user()->image)) }}" alt="Profile Image" /> --}}

         
        </div>
        <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
          <span class="font-weight-semibold mb-1 mt-2 text-center pl-4"> {{ auth()->user()->name }}
           <small>{{ auth()->user()->level }}</small></span>
        </div>
      </a>
    </li>
    <li class="nav-item pt-3">
      <a class="nav-link d-block" href="index.html">
        {{-- <img class="sidebar-brand-logo" src="{{asset('assets/images/logo.svg')}}" alt="" />
        <img class="sidebar-brand-logomini" src="{{asset('assets/images/logo-mini.svg')}}" alt="" /> --}}
        <div class="small font-weight-bold pt-1">Spiritual WIsodm</div>
      </a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="mdi mdi-compass-outline menu-icon"></i>
        <span class="menu-title" >Dashboard</span>
      </a>
    </li>
    <li class="nav-item" style="cursor: pointer !important;">
      <a class="nav-link" href="{{ route('products') }}">
        <i class="mdi mdi-table-large menu-icon"></i>
        <span class="menu-title">Wisdom</span>
      </a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="{{ route('admin') }}">
        <i class="mdi mdi-account-key menu-icon"></i>
        <span class="menu-title ">Sub Admin</span>
       </a>
  
    </li>
     <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}">
        <i class="mdi mdi-arrow-bottom-right
 menu-icon"></i>
        <span class="menu-title">Logout</span>
      </a>
    </li>
  
  </ul>
</nav>