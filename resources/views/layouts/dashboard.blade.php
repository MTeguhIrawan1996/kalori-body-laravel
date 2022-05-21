<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    <!-- STYLE -->
    @stack('prepand-style')
    @include('includes.style')
    @stack('addon-style')
</head>

<body>
  <div id="wrapper" class="page-dashboard">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Build Body</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item {{ (request()->is('dashboard/alat-gym')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard-alat-gym') }}">
          <i class="fas fa-fw fa-dumbbell"></i>
          <span>Lihat Alat Gym</span></a>
      </li>
      <li class="nav-item {{ (request()->is('dashboard/e-member')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard-e-member') }}">
          <i class="fas fa-fw fa-address-card"></i>
          <span>Buat E-Member Card</span></a>
      </li>
      <li class="nav-item {{ (request()->is('dashboard/hitung-kalori')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard-hitung-kalori') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Hitung Kalori</span></a>
      </li>
            <li class="nav-item {{ (request()->is('dashboard/pembayaran', 'dashboard/cetak-member')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard-pembayaran') }}">
          <i class="fas fa-fw fa-money-check"></i>
          <span>Pembayaran & Status Member</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fas fa-fw fa-arrow-left"></i>Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
      </li>
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">
        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
          <div class="topbar-divider d-none d-sm-block"></div>
          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-black-600 small">{{ Auth::user()->name }}</span>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
            </div>
          </li>
        </ul>
      </nav>
<!-- PAGE CONTENT -->
@yield('content')
  </div>
</div>
  <!-- End of Page Wrapper -->
  <!-- Logout Modal-->
  {{-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div> --}}
    <!-- SCRIPT -->
    @stack('prepand-script')
    @include('includes.script')
    @stack('addon-script')
    <script>!(function (t) {
    "use strict";
    t("#sidebarToggle, #sidebarToggleTop").on("click", function (o) {
        t("body").toggleClass("sidebar-toggled"),
            t(".sidebar").toggleClass("toggled"),
            t(".sidebar").hasClass("toggled") &&
                t(".sidebar .collapse").collapse("hide");
    }),
        t(window).resize(function () {
            t(window).width() < 768 && t(".sidebar .collapse").collapse("hide");
        });
    })(jQuery);</script>

</body>

</html>