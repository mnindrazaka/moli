<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ base_url() }}assets/vendors/material-admin/images/favicon.png">
  <title>Moli | Admin Pages</title>
  <link href="{{ base_url() }}assets/vendors/material-admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ base_url() }}assets/vendors/material-admin/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
  <link href="{{ base_url() }}assets/vendors/material-admin/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
  <link href="{{ base_url() }}assets/vendors/material-admin/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
  <link href="{{ base_url() }}assets/vendors/material-admin/plugins/c3-master/c3.min.css" rel="stylesheet">
  <link href="{{ base_url() }}assets/vendors/material-admin/css/style.css" rel="stylesheet">
  <link href="{{ base_url() }}assets/vendors/material-admin/css/colors/blue.css" id="theme" rel="stylesheet">

  <!--[if lt IE 9]>
  <script src="{{ base_url() }}https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="{{ base_url() }}https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- dataTables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
  {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/> --}}
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  @yield('header')
</head>

<body class="fix-header fix-sidebar card-no-border">
  <div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
  </div>
    <div id="main-wrapper">
      <header class="topbar">
        <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
              <b><img src="{{ base_url() }}assets/vendors/material-admin/images/favicon.png" alt="homepage" class="light-logo" style="weight:40px; height:40px;" /></b>
              <span>
                <a href="#" class="text-white bg-dark">MOLI | Admin</a>
              </div>
          <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0">
              <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
              <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                <form class="app-search">
                  <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                </form>
              </li>
            </ul>
              <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ base_url() }}assets/vendors/material-admin/images/users/1.jpg" alt="user" class="profile-pic m-r-10" />Markarn Doe</a>
                </li>
              </ul>
            </div>
        </nav>
      </header>
        <aside class="left-sidebar">
          <div class="scroll-sidebar">
            <nav class="sidebar-nav">
              <ul id="sidebarnav">
                <li><a class="waves-effect waves-dark" href="{{ base_url() }}admin/beranda/" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a></li>
                <li><a class="waves-effect waves-dark" href="{{ base_url() }}admin/beranda/pages-profile.html" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Profile</span></a></li>
                <li><a class="waves-effect waves-dark" href="{{ base_url() }}table-basic.html" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Data Table</span></a>
                  <ul class="sidebar-nav">
                    <li><a class="waves-effect waves-dark" href="{{ base_url() }}admin/pengguna/" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Users</span></a></li>
                    <li><a class="waves-effect waves-dark" href="{{ base_url() }}admin/toko/" aria-expanded="false"><i class="mdi mdi-store"></i><span class="hide-menu">Toko</span></a></li>
                    <li><a class="waves-effect waves-dark" href="{{ base_url() }}admin/kategori/" aria-expanded="false"><i class="mdi mdi-tag"></i><span class="hide-menu">Categories</span></a></li>
                  </ul>
                </li>
                {{-- <li><a class="waves-effect waves-dark" href="{{ base_url() }}map-google.html" aria-expanded="false"><i class="mdi mdi-earth"></i><span class="hide-menu">Google Map</span></a></li>
                <li><a class="waves-effect waves-dark" href="{{ base_url() }}pages-blank.html" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Blank Page</span></a></li> --}}
              </ul>
            </nav>
          </div>
          <div class="sidebar-footer">
            <!-- item--><a href="{{ base_url() }}" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
            <!-- item--><a href="{{ base_url() }}" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
            <!-- item--><a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
          </div>
        </aside>
          <!-- Content -->
          @yield('content')
          {{-- End Content --}}
    </div>

      <script src="{{ base_url() }}assets/vendors/material-admin/plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap tether Core JavaScript -->
      <script src="{{ base_url() }}assets/vendors/material-admin/plugins/bootstrap/js/tether.min.js"></script>
      <script src="{{ base_url() }}assets/vendors/material-admin/plugins/bootstrap/js/bootstrap.min.js"></script>
      <!-- slimscrollbar scrollbar JavaScript -->
      <script src="{{ base_url() }}assets/vendors/material-admin/js/jquery.slimscroll.js"></script>
      <!--Wave Effects -->
      <script src="{{ base_url() }}assets/vendors/material-admin/js/waves.js"></script>
      <!--Menu sidebar -->
      <script src="{{ base_url() }}assets/vendors/material-admin/js/sidebarmenu.js"></script>
      <!--stickey kit -->
      <script src="{{ base_url() }}assets/vendors/material-admin/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
      <!--Custom JavaScript -->
      <script src="{{ base_url() }}assets/vendors/material-admin/js/custom.min.js"></script>
      <script src="{{ base_url() }}assets/vendors/material-admin/plugins/chartist-js/dist/chartist.min.js"></script>
      <script src="{{ base_url() }}assets/vendors/material-admin/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
      <!--c3 JavaScript -->
      <script src="{{ base_url() }}assets/vendors/material-admin/plugins/d3/d3.min.js"></script>
      <script src="{{ base_url() }}assets/vendors/material-admin/plugins/c3-master/c3.min.js"></script>
      <!-- Chart JS -->
      <script src="{{ base_url() }}assets/vendors/material-admin/js/dashboard1.js"></script>
      {{-- Data Table --}}
      <script>
      $(document).ready(function() {
      	$('#dataTables').DataTable();
      } );
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
      @yield('script')
    </body>

    </html>
