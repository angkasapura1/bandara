<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin - Angkasa Pura</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=asset('admin/bower_components/font-awesome/css/font-awesome.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=asset('admin/bower_components/Ionicons/css/ionicons.min.css')?>">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=asset('admin/dist/css/AdminLTE.min.css')?>">

  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="<?=asset('admin/dist/css/skins/skin-blue.min.css')?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="<?=url('administrator/akun')?>" class="dropdown-toggle" data-toggle="dropdown">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?=ucwords(Auth::user()->name)?></span>
            </a>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="<?=url('logout')?>"><i class="fa fa-sign-out"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <h4 style="color: #fff"><?=ucwords(Auth::user()->name)?></h4>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

      </div>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">M E N U</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="<?=url('administrator')?>"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
        <li><a href="<?=url('administrator/tenan')?>"><span>Tenant</span></a></li>
        <li><a href="<?=url('administrator/berita-promo')?>"><span>Promo dan Event</span></a></li>
        <li><a href="<?=url('administrator/survey')?>"><span>Survey</span></a></li>
        <li><a href="<?=url('administrator/profil')?>"><span>Profil dan Kontak Kami</span></a></li>
        <li><a href="<?=url('administrator/akun')?>"><span>Akun</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Powered By <a href="https://facebook.com/exomatiksc">Exomatik Developer</a>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="#">Angkasa Pura</a>.</strong> All rights reserved.
  </footer>
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?=asset('admin/bower_components/jquery/dist/jquery.min.js')?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="<?=asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>"></script>
<script>
  $(function () {
    $('.teks').wysihtml5()
  })
</script>
<!-- AdminLTE App -->
</body>
</html>