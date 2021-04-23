<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    {{-- include all css files and meta tags --}}
    @yield('header')
    <!-- Scripts -->
  </head>
  <body id="page-top">
    <style type="text/css" media="screen">
    .loader {
    left: 50%;
    top: 50%;
    width: 120;
    background: #1e1d1d82;
    z-index: 100;
    position: fixed;
    border: 16px solid #f3f3f3;
    border-radius: 50%;
    border-top: 16px solid #3498db;
    width: 120px;
    height: 120px;
    -webkit-animation: spin 2s linear infinite; /* Safari */
    animation: spin 2s linear infinite;
    }
    /* Safari */
    @-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
    }
    @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
    }
    .overlay{
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: 10;
    background-color: rgba(0,0,0,0.5);
    }
    </style>
    <div class="loader"></div>
    <div class="overlay"> </div>
    <!-- Page Wrapper -->
    <div id="wrapper">
      {{-- side bar navgation --}}
      @yield('sidebar')
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
<a href="/" class="btn-primary btn-sm" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;">Vist Site</a>
            
     
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
 
              <div class="topbar-divider d-none d-sm-block"></div>
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                  <img class="img-profile rounded-circle" src="{{ asset('img/user_img_not_found.png') }}">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              
                  <a class="dropdown-item" href="{{ route('user_mangement_homepanel') }}">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          @include('includes-admin.alerts')
          @yield('content')
          
          
        </div>
        <!-- End of Main Content -->
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2020</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    {{-- include all js files --}}
    @yield('footer')
    <!-- End of Page Wrapper -->
  </body>
</html>