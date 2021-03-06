<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Harrison Locks| Admin Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

  @yield('head')
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Harrison Locks</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/admin/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Admins
      </div>



      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#headingProduct" aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-fw fa-folder"></i>
              <span>Products</span>
          </a>
          <div id="headingProduct" class="collapse" aria-labelledby="headingProduct" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="/admin/categories">Categories</a>
                  <a class="collapse-item" href="/admin/subcategories">Sub Categories</a>
                  <a class="collapse-item" href="/admin/innercategories">Inner Categories</a>
                  <a class="collapse-item" href="/admin/products">Product</a>
              </div>
          </div>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item">
          <a class="nav-link collapsed" href="/admin/blog" >
              <i class="fas fa-fw fa-file"></i>
              <span>Blog</span>
          </a>
      </li>


      <li class="nav-item">
          <a class="nav-link collapsed" href="/admin/banners" >
              <i class="fas fa-fw fa-file"></i>
              <span>Banners</span>
          </a>
      </li>

      <!-- Heading -->
      <!-- Nav Item - User Information -->

      <!-- Nav Item - About Us Collapse Menu -->
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAbout" aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-fw fa-folder"></i>
              <span>About</span>
          </a>
          <div id="collapseAbout" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="/admin/pages/mission-and-vision">Our Mission &amp; Vision</a>
                  <a class="collapse-item" href="/admin/pages/company-profile">Company Profile</a>
                  <a class="collapse-item" href="/admin/pages/message-from-ceo">Message From CEO</a>
                  <a class="collapse-item" href="/admin/pages/connect-from-fb">Connect From FB</a>
                  <a class="collapse-item" href="/admin/pages/our-clients">Our Clients</a>
              </div>
          </div>
      </li>


       <!-- Nav Item - About Us Collapse Menu -->
       <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseContact" aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-fw fa-folder"></i>
              <span>Contact</span>
          </a>
          <div id="collapseContact" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="/admin/pages/contact-head-office">Head Office</a>
                  <a class="collapse-item" href="/admin/pages/contact-registered-office">Registered Office</a>
                  <a class="collapse-item" href="/admin/pages/contact-branch">Branch</a>
                  <a class="collapse-item" href="/admin/displaycontact">Contact Details</a>
              </div>
          </div>
      </li>
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseApplication" aria-expanded="true" aria-controls="collapseApplication">
              <i class="fas fa-fw fa-folder"></i>
              <span>Applications &amp; Solutions</span>
          </a>
          <div id="collapseApplication" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="/admin/pages/info-about-service">Info About Service</a>
                  <a class="collapse-item" href="/admin/pages/indias-service-centre">India's Service Center</a>
              </div>
          </div>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="/admin/pages/video-gallary">Video Gallary</a>
                    <a class="collapse-item" href="/admin/pages/display-design">Display &map; Design</a>
                    <a class="collapse-item" href="/admin/pages/achievements">Achievements</a>
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Other Pages:</h6>
                    <a class="collapse-item" href="/admin/pages/privacy">Privacy Policy</a>
                    <a class="collapse-item" href="/admin/pages/terms">Terms &amp; Conditions</a>
                    <a class="collapse-item" href="/admin/pages/disclaimer">Disclaimer</a>
                    <a class="collapse-item" href="/admin/pages/helpline">Helpline Number</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/admin/popup" >

            <i class="fas fa-fw fa-file"></i>
              <span>Popup</span>
          </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="/admin/pages/safety" >

              <i class="fas fa-fw fa-file"></i>
                <span>Safety</span>
            </a>
          </li>
         <!-- Nav Item - Pages Collapse Menu -->
         <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseQueries" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Queries</span>
            </a>
            <div id="collapseQueries" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="/admin/queries/contact">Contact</a>
                    <a class="collapse-item" href="/admin/queries/careers">Careers</a>
                    <a class="collapse-item" href="/admin/queries/newsletter">Newsletter</a>
                    <a class="collapse-item" href="/admin/queries/channel">Channel Partnership</a>
                </div>
            </div>
        </li>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFooter" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Footer</span>
            </a>
            <div id="collapseFooter" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="/admin/pages/footer-section-one">Footer About</a>
                    <a class="collapse-item" href="/admin/pages/footer-section-two">Footer Information</a>
                    <a class="collapse-item" href="/admin/pages/footer-section-three">Footer Qucik Link</a>
                    <a class="collapse-item" href="/admin/pages/footer-section-four">Footer Social Media</a>
                </div>
            </div>
        </li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>

<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>


    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator </span>
        <img class="img-profile rounded-circle" src="sdsdk">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
              </a>
        </div>
      </li>

    </ul>

  </nav>
  <!-- End of Topbar -->

  <!-- Begin Page Content -->
  <div class="container-fluid">

      @yield('content')

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Harrison Locks</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <a href="{{ route('logout') }}" class="btn btn-primary"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
  @yield('script')

</body>

</html>
