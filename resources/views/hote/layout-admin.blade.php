<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('titlePage')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./admin/template/vendors/feather/feather.css">
  <link rel="stylesheet" href="./admin/template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="./admin/template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="./admin/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="./admin/template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="./admin/template/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./admin/template/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="./admin/template/images/favicon.png" />
  <style>
    .table td img, .jsgrid .jsgrid-table td img {
        width: auto;
        height: 150px;
        border-radius: 0%;
    }
  </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="{{ route('hote.dashboard') }}"><b>AWLO</b>.</a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('hote.dashboard') }}"><b>A</b>wlo</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Voir le message
                  </p>
                </div>
              </a>
              
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{ session()->get('hote')->image_profil }}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="{{ route('hote.cni') }}">
                <i class="ti-user text-primary"></i>
                Pièce d'identité
              </a>
              <a href="{{ route('hote.logout') }}" class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Déconnexion
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <x-menu-sidebar />
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Bienvenu(e) {{ session()->get('hote')->prenom }} {{ session()->get('hote')->nom }}</h3>
                  <h6 class="font-weight-normal mb-0">Notre système de gestion <span class="text-primary">des hotes</span> pour la gestion des biens immobiliers.</h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                    <div class="card-body">
                        <h3> @yield('titlePage') </h3>
                    </div>
                 </div>
                </div>
              </div>
              <hr />
              <div class="row">
                @yield('contenu')
              </div>
            </div>
          </div>
          
        
           
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html 
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div> 
        </footer> -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="./admin/template/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="./admin/template/vendors/chart.js/Chart.min.js"></script>
  <script src="./admin/template/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="./admin/template/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="./admin/template/js/dataTables.select.min.js"></script>
    

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="./admin/template/js/off-canvas.js"></script>
  <script src="./admin/template/js/hoverable-collapse.js"></script>
  <script src="./admin/template/js/template.js"></script>
  <script src="./admin/template/js/settings.js"></script>
  <script src="./admin/template/js/todolist.js"></script>
    

  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="./admin/template/js/dashboard.js"></script>
  <script src="./admin/template/js/Chart.roundedBarCharts.js"></script>
    
  <!-- End custom js for this page-->
</body>
</html>