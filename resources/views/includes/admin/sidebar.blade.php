  <!-- Sidebar -->
  <ul class="navbar-nav bg-black sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
      <div class="sidebar-brand-icon rotate-n-15">
      <img style="width: 50px; height:50px;" src="{{asset('home/img/logo.png')}}" alt="">
      </div>
      <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Menu
    </div>
   
  


    <!-- Nav Item - Charts -->
    <li class="nav-item">
    <a class="nav-link" href="{{route('post')}}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Post</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('gallery')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Gallery</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
    <a class="nav-link" href="{{route('slider')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Slider</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->
