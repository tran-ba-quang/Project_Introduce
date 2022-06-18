<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}">
    <!-- NProgress -->
    <link rel="stylesheet" href="{{asset('vendors/nprogress/nprogress.css')}}">
    {{-- <link href="../vendors/nprogress/nprogress.css" rel="stylesheet"> --}}
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('vendors/iCheck/skins/flat/green.css')}}">
    {{-- <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet"> --}}
	
    <!-- bootstrap-progressbar -->
    <link rel="stylesheet" href="{{asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">
    {{-- <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"> --}}
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('vendors/jqvmap/dist/jqvmap.min.css')}}">
    {{-- <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/> --}}
    <!-- bootstrap-daterangepicker -->
    <link rel="stylesheet" href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}">
    {{-- <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"> --}}

    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    {{-- <link href="../build/css/custom.min.css" rel="stylesheet"> --}}
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            @include('admin.left-menu')
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            @include('admin.top-nav')
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          @yield('content')
          <!-- /top tiles -->
        <!-- /page content -->

        <!-- footer content -->
        {{-- <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer> --}}
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    {{-- <script src="../vendors/jquery/dist/jquery.min.js"></script> --}}
    <!-- Bootstrap -->
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    {{-- <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script> --}}
    <!-- FastClick -->
    <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    {{-- <script src="../vendors/fastclick/lib/fastclick.js"></script> --}}
    <!-- NProgress -->
    <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
    {{-- <script src="../vendors/nprogress/nprogress.js"></script> --}}
    <!-- Chart.js -->
    <script src="{{asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>
    {{-- <script src="../vendors/Chart.js/dist/Chart.min.js"></script> --}}
    <!-- gauge.js -->
    <script src="{{asset('vendors/gauge.js/dist/gauge.min.js')}}"></script>
    {{-- <script src="../vendors/gauge.js/dist/gauge.min.js"></script> --}}
    <!-- bootstrap-progressbar -->
    <script src="{{asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    {{-- <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> --}}
    <!-- iCheck -->
    <script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>
    {{-- <script src="../vendors/iCheck/icheck.min.js"></script> --}}
    <!-- Skycons -->
    <script src="{{asset('vendors/skycons/skycons.js')}}"></script>
    {{-- <script src="../vendors/skycons/skycons.js"></script> --}}
    <!-- Flot -->
    <script src="{{asset('vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('js/admin.js')}}"></script>
	
  </body>
</html>
