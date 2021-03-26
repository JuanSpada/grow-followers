<!DOCTYPE html>
<html lang="es">

<head>
  <meta name="google-site-verification" content="BGmK5vCFVQ9Lxu-oonAG9W1afrIR7iYNHGJPPNV0Cxc" />
   <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T8VLC9M');</script>
    <!-- End Google Tag Manager -->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Juanziz Spada">
  <link rel="icon" type="png" href="/img/favicon.png">

  <title>MásFollows</title>

  <!-- Custom fonts for this template -->
  <link href="/backoffice/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/backoffice/css/sb-admin-2.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="/backoffice/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  

</head>

<body id="page-top">

      <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8VLC9M"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Page Wrapper -->
  <div id="wrapper">

	<!-- Sidebar -->
	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

	  <!-- Sidebar - Brand -->
	  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route ('backoffice')}}">
		<div class="sidebar-brand-icon rotate-n-15">
		  <i class="fas fa-laugh-wink"></i>
		</div>
		<div class="sidebar-brand-text mx-3">Más <sup>Follows</sup></div>
	  </a>

	  <!-- Divider -->
	  <hr class="sidebar-divider my-0">

	  <!-- Nav Item - Dashboard -->
	  {{-- <li class="nav-item">
		<a class="nav-link" href="index.html">
		  <i class="fas fa-fw fa-tachometer-alt"></i>
		  <span>Dashboard</span></a>
	  </li> --}}

	  <!-- Divider -->
	  {{-- <hr class="sidebar-divider"> --}}



  
    <!-- Heading -->
	  <div class="sidebar-heading">
      Usuarios
      </div>
      <!-- Nav Item - Charts -->
      <li class="nav-item active">
          <a class="nav-link" href="{{ route('home') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Inicio</span></a>
      </li>
	  
      <!-- Nav Item - Tables -->
	  <!-- Divider -->
	  <hr class="sidebar-divider d-none d-md-block">
    {{-- <p class="ml-4 text-white">Estado:</p> --}}
    {{-- <p class="ml-4 text-white">{{Auth::user()->showEstado()}}</p> --}}
	  <!-- Sidebar Toggler (Sidebar) -->
	  <div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	  </div>

	</ul>
	<!-- End of Sidebar -->

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
  
          <!-- Topbar Search -->
          {{-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> --}}
  
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
  
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            {{-- <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
   --}}
            <div class="topbar-divider d-none d-sm-block"></div>
  
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              {{-- <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                <img class="img-profile rounded-circle" src="{{Auth::user()->avatar}}">
              </a> --}}
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <a class="dropdown-item" href="{{route ('configurar')}}">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configuración
                </a>
                {{-- <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a> --}}
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Salir
                </a>
  
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>
  
          </ul>
  
        </nav>
        <!-- End of Topbar -->
	  <!-- Main Content -->
	  <div id="content" class="d-flex flex-column justify-content-between">


		<!-- Begin Page Content -->
		<div class="container-fluid">

		  <!-- Page Heading -->
		  <h1 class="h3 mb-2 text-gray-800">Sistema de Crecimiento para Instagram</h1>

		  @yield('content')

		</div>
		<!-- /.container-fluid -->

	  <!-- End of Main Content -->

	  <!-- Footer -->
	  <footer class="sticky-footer bg-white">
		<div class="container my-auto">
		  <div class="copyright text-center my-auto">
			<span>Copyright &copy; MásFollows 2019</span>
		  </div>
		</div>
	  </footer>
	  <!-- End of Footer -->

	</div>
	<!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="/backoffice/vendor/jquery/jquery.min.js"></script>
  <script src="/backoffice/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/backoffice/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/backoffice/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/backoffice/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/backoffice/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/backoffice/js/demo/datatables-demo.js"></script>
  
  <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6012790.js"></script>
  <!-- End of HubSpot Embed Code -->
</body>

</html>
