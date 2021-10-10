<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>MCV Pharma | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/dashboard/libs/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/dashboard/libs/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  {{-- <link rel="stylesheet" href="/dashboard/libs/Ionicons/css/ionicons.min.css"> --}}
  <!-- jvectormap -->
  <!-- <link rel="stylesheet" href="/dashboard/libs/jvectormap/jquery-jvectormap.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="/dashboard/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/dashboard/dist/css/skins/_all-skins.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

  <link rel="stylesheet" href="/dashboard/libs/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    .form-control { width:50%;}
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>MCV</b> Pharma</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="{{ url('/logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/dashboard/dist/img/avatar2.png" style="background-color: white;" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>MCV Admin</p>
        </div>
      </div>
      
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="/administrator">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
          
        </li>
        <li>
          <a href="/administrator/bestSellers">
            <i class="fa fa-dashboard"></i> <span>Best Sellers</span>
            
          </a>
        </li>
        
        <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Brands </span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="/administrator/brands/create"><i class="fa fa-circle-o"></i>New Brand</a></li>
              <li><a href="/administrator/brands/"><i class="fa fa-circle-o"></i> View Brands</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Categories </span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="/administrator/categories/create"><i class="fa fa-circle-o"></i>New Category</a></li>
              <li><a href="/administrator/categories/"><i class="fa fa-circle-o"></i> View Categories</a></li>
            </ul>
        </li>
        
        <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Products </span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="/administrator/products/create"><i class="fa fa-circle-o"></i>New Product</a></li>
              <li><a href="/administrator/products/"><i class="fa fa-circle-o"></i> View Products</a></li>
            </ul>
        </li>
        
        {{-- <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">16</small>
            </span>
          </a>
        </li> --}}
        
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  @yield('content')

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="/dashboard/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/dashboard/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/dashboard/libs/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dashboard/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="/dashboard/libs/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<!-- <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
<!-- SlimScroll -->
<script src="/dashboard/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="/dashboard/libs/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dashboard/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dashboard/dist/js/demo.js"></script>

<script src="/dashboard/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/dashboard/libs/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if(\Session::has('success'))
        toastr.success("{{\Session::get('success')}}");
    @endif
    @if(\Session::has('error'))
        toastr.error("{{\Session::get('error')}}");
    @endif
</script>
@stack('pageScripts')
</body>
</html>
