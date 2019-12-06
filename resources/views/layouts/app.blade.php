<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ALIF Integrated Portal') }}</title>    

  <!-- Scripts -->
  <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
	<!-- <script src="/js/app.js"></script> -->
	<!-- <script src="/js/jquery-3.3.1.js"></script> -->

  <!-- Fonts -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/apple-icon-57x57.png') }}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/apple-icon-60x60.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/apple-icon-76x76.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-icon-114x114.png') }}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/apple-icon-120x120.png') }}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/apple-icon-144x144.png') }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/apple-icon-152x152.png') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-icon-180x180.png') }}">
	<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('images/android-icon-192x192.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon-96x96.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
	<link rel="manifest" href="{{ asset('imagesmanifest.json') }}">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="{{ asset('images/ms-icon-144x144.png') }}">
	<meta name="theme-color" content="#ffffff">

  <!-- Styles -->
  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
  <link rel="stylesheet" href="{{ asset('vendor/morris/css/morris.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendor/vectorMaps/css/jquery-jvectormap-2.0.3.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendor/fullcalender/css/fullcalendar.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendor/chartlist/css/chartist.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendor/fullcalender/css/fullcalendar.print.css') }}" media='print' />
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

	<!-- <link href="{{ asset('css/font-awesome.min.css') }}" rel='stylesheet' type='text/css'> -->
	<!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->
	<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>

    @guest
        <main class="py-4">
            @yield('content')
        </main>
    @else
    <!-- Wrapper Start -->
      <div id="wrapper">

        <!-- Header Start -->
        <header class="top-bar flex-row align-items-center bg-info">
    
          <!-- Logo  -->
          <div class="nav-brand">
            <div class="hamburg-icon">
              <a href="javascript:void(0)" class="nav-link">
                <i class="mdi mdi-menu md-24"></i>
              </a>
            </div>
            <div class="navbar-header">
              <h2 class="mb-0">
                <a class="navbar-brand" href="javascript:void(0)">
                  <img src="{{ asset('images/logo.png') }}" alt="Admin" height="50" >
                </a>
              </h2>
            </div>
          </div>
          <!-- Logo End  -->
    
          <!-- Right Nav -->
          <div class="navbar-container">
            <!--<div class="right-bar align-self-center">
              <div class="search-area">
                <input class="form-control no-border" type="text" placeholder="Search something special" />
                <div class="search-icon">
                  <i class="mdi mdi-magnify md-24"></i>
                  <i class="mdi mdi-arrow-left md-24"></i>
                </div>
                <div class="clear-icon">
                  <i class="mdi mdi-close md-24"></i>
                </div>
              </div>
            </div>-->
            <button class="d-md-none three-dots">
              <i class="mdi mdi-dots-vertical md-24"></i>
            </button>
            
            <div class="notifications">
              <P><FONT COLOR="#fee">{{ Auth::user()->name }}</FONT></P>
              <ul>
                <li>
                  <a href="javascript:void(0)" data-toggle="dropdown" class="nav-link" id="notificationList" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="mdi mdi-bell-outline md-24"></i>
                  </a>
                  <!-- Notification List -->
                  @include("layouts._notification")
                  <!-- Notification List End -->
                </li>
    
                <li>
                  <a href="javascript:void(0)" data-toggle="dropdown" class="nav-link" id="emailList" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="mdi mdi-email-outline md-24"></i>
                  </a>
                  <!-- Notification List -->
                  @include("layouts._mail")
                  <!-- Notification List End -->
                </li>
                <li>
                  @include("layouts._personal")
                </li>
              </ul>
            </div>
          </div><!-- Right Nav End -->
    
        </header><!-- Header End -->
    
        <!-- Content Wrapper Start -->
        <div class="main-wrapper" id="main-wrapper">
    
          <!-- Left Navigation Start -->
          <aside class="main-header bg-secondary">
            <nav class="navbar">
              <ul class="navbar-nav">
                
                @include("layouts._menu_general")               
                @include("layouts._menu_fa")
                @include("layouts._menu_financing")
        				@include("layouts._menu_generalaffair")
                @include("layouts._menu_settings")

              </ul>
            </nav>
          </aside> <!-- Left Navigation End -->
    
          <!-- Main Start -->
          <main>
          @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ $message }}</strong>
            </div>
          @endif

          @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong>{{ $message }}</strong>
            </div>
          @endif
    
            <!-- Content Start -->
            @yield('content')
            <!-- Content End -->
    
            <!-- Footer Start -->
            <footer>
              <p>Copyright &copy; 2019 <a href="http://alijarahindonesia.com" target="_blank">ALIF</a>. All rights reserved.</p>
              <div class="d-inline-block">
                <button type="button" class="btn-outline-fb btn-social-outline  mr-2">
                  <i class="mdi mdi-facebook"></i>
                </button>
                <button type="button" class="btn-outline-tw btn-social-outline  mr-2">
                  <i class="mdi mdi-twitter"></i>
                </button>
                <button type="button" class="btn-outline-ln btn-social-outline  mr-2">
                  <i class="mdi mdi-linkedin"></i>
                </button>
              </div>
            </footer><!-- Footer End -->
    
          </main><!-- Main End -->
    
        </div><!-- Content Wrapper End -->
    
      </div><!-- Wrapper End -->
          
    
      <!-- ================== BEGIN BASE JS ================== -->
      <script src="{{ asset('vendor/jQuery/js/jquery-3.2.1.min.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap/js/popper.min.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
      <!--[if lt IE 9]>
        <script src="../assets/vendor/html5shiv/js/html5shiv.js"></script>
        <script src="../assets/vendor/respondjs/js/respond.min.js"></script>
      <![endif]-->
      <script src="{{ asset('js/app.js') }}"></script>
      <!-- ================== END BASE JS ================== -->

      <!-- ================== BEGIN PAGE LEVEL JS ================== -->
      <script src="{{ asset('vendor/chartjs/js/Chart.bundle.min.js') }}"></script>
      <script src="{{ asset('vendor/morris/js/raphael.min.js') }}"></script>
      <script src="{{ asset('vendor/morris/js/morris.min.js') }}"></script>      

      <script src="{{ asset('vendor/sparkline/js/jquery.sparkline.js') }}"></script>
      <script src="{{ asset('vendor/vectorMaps/js/jquery-jvectormap-2.0.3.min.js') }}"></script>
      <script src="{{ asset('vendor/vectorMaps/js/jquery-jvectormap-world-mill.js') }}"></script>
      <script src="{{ asset('vendor/easy-piechart/js/jquery.easypiechart.min.js') }}"></script>
      <script src="{{ asset('vendor/chartjs/js/Chart.bundle.min.js') }}"></script>

      <script src="{{ asset('vendor/bootstrap-daterangepicker/js/moment.min.js') }}"></script>
      <script src="{{ asset('vendor/fullcalender/js/fullcalendar.min.js') }}"></script>
      <script src="{{ asset('vendor/chartlist/js/chartist.min.js') }}"></script>
      <script src="{{ asset('vendor/chartlist/js/chartist-plugin-tooltip.min.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

      <script src="{{ asset('js/demo/dashboard-demo.js') }}"></script>
      <script src="{{ asset('js/demo/dashboard2-demo.js') }}"></script>
      <script src="{{ asset('js/tab-responsive.js') }}"></script>
      <script src="{{ asset('js/demo/dashboard3-demo.js') }}"></script>      
      <script src="{{ asset('js/demo/pickers-demo.js') }}"></script>
      <!-- ================== END PAGE LEVEL JS ================== -->
      @endguest
</body>
</html>
