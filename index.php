<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Easy LTE</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/js/lte/plugins/fontawesome-free/css/all.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/lte/adminlte.min.css">
  <!-- overlayScrollbars -->
  <!--
  <link rel="stylesheet" href="../../js/lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
-->

  <!-- easyui -->
  
  <!--<link rel="stylesheet" type="text/css" href="../../css/easyui/theme/metro/easyui.css">-->
  <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/material/easyui.css">

  <link rel="stylesheet" href="assets/css/custom.css">

  <!-- Easyui -->
 <style>
  body{
    font-size: 0.9rem !important;
  }
 </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
  <!-- Navbar -->
  <?php  include "parts/navbar.php"; ?>
  <!-- /.navbar -->

    <!-- Main Sidebar Container -->
  <?php include "parts/sidebar.php";?>
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div id="content" class="easyui-panel" style="border:none !important;">
           <?php include "pages/dashboard.php";?>
      </div>
       


        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="assets/js/lte/plugins/jquery/jquery.min.js"></script>

  

  <!-- Bootstrap 4 -->
  <script src="assets/js/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  
  <!-- Easyui-->
  <script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/js/lte/adminlte.js"></script>



  <script>    
    function _route(url){
      $('#content').panel('open').panel('refresh',url);       
    } 
  </script>
</body>

</html>