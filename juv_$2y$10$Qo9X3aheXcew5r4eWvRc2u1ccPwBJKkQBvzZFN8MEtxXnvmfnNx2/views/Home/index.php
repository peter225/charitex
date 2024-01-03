<?php

$admin = '';

if( array_key_exists('admin', $data ) )

$admin = $data['admin'];
?>




<!DOCTYPE html>
<html>
<head>                                               
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | TedPrimeHub Admin Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/AdminLTE-master1/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="assets/AdminLTE-master1/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/AdminLTE-master1/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="assets/AdminLTE-master1/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/AdminLTE-master1/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/AdminLTE-master1/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/AdminLTE-master1/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="assets/AdminLTE-master1/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/adminRefactor.css">
</head>
<body>
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-success navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button">
            <i class="fas fa-bars"></i>
          </a>
        </li>
        
      </ul>
      
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
      <img src="../../assets/e-maginxLogo.png" alt="AdminLTE Logo" class="brand-image" 
        style="opacity: .8">
        <span class="brand-text font-weight-light">Admin dashboard</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="assets/AdminLTE-master1/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">
              <!-- <?php
                                  
                  

              ?> -->
                                  
            </a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="#"></i>
                </p>
              </a>
            </li> 
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-bolt"></i>
                <p>
                  Tasks
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/Admins/studentRegistration" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Student Registrations</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="/Admins/studentManagement" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Student Management</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/Admins/createQuestions" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create Questions</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/Admins/setAnswers" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Answer Keys</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/Admins/testCreation" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Test Creation</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/Admins/testManagement" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Test Management</p>
                  </a>
                </li>
              </ul>
            </li> 
          
            <li class="nav-item has-treeview">
              <a href="/Logout" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                  <i class="#"></i>
                </p>
              </a>
              
            </li>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

      <!-- Sidebar Menu -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" id="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">CBT Admin Dashboard</h1>
            </div><!-- /.col -->
            
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>

                  <p>Student Registrations</p>
                </div>
                <div class="icon">
                  <i class="fas fa-user-plus"></i>
                </div>
                <a href="/Admins/studentRegistration" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>

                  <p>Create Questions</p>
                </div>
                <div class="icon">
                  <i class="fas fa-save"></i>
                </div>
                <a href="/Admins/createQuestions" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            
            <!-- ./col -->
          
        
            <div class="col-lg-3 col-6">
              <!-- small card -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>0</h3>

                  <p>Answer keys</p>
                </div>
                <div class="icon">
                  <i class="fas fa-cogs"></i>
                </div>
                <a href="/Admins/setAnswers" class="small-box-footer">
                  More info <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small card -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3 class="customerNo" data-cutomerNo id="customerNo">
                    3
                    
                  </h3>

                  <p>Test Management</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                <a href="/Admins/testManagement" class="small-box-footer">
                  More info <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
          </div>
            <!-- ./col -->

          <!-- /.row -->
          <!-- Main row -->
          
              <!-- /.card -->
            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <footer class="blog-footer mt-5" id="footer">
      <img src="../assets/tedprimelogo.png" class="img-fluid"  width="150px" alt="logo2">
      <p>
        <a href="/home">Home</a>
      </p>
      <p>
        <small> &copy; TedPrime HUB</small>
      </p>
      <p>
        <i class="fa fa-phone" aria-hidden="true"></i> +234 80564765356
      </p>
      <p>
        <i class="fa fa-location-arrow" aria-hidden="true"></i> Idi-Aba, beside BGC
      </p>
    </footer>

  <!-- jQuery -->
  <script src="assets/AdminLTE-master1/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="assets/AdminLTE-master1/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>

  <!-- Bootstrap 4 -->
  <script src="assets/AdminLTE-master1/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="assets/AdminLTE-master1/plugins/chart.js/Chart.min.js"></script>

  <script src="assets/AdminLTE-master1/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="assets/AdminLTE-master1/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="assets/AdminLTE-master1/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="assets/AdminLTE-master1/plugins/moment/moment.min.js"></script>
  <script src="assets/AdminLTE-master1/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="assets/AdminLTE-master1/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="assets/AdminLTE-master1/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="assets/AdminLTE-master1/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/AdminLTE-master1/dist/js/adminlte.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="assets/AdminLTE-master1/dist/js/demo.js"></script>
</body>
</html>

?>




