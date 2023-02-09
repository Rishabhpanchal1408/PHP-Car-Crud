<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== TRUE) {
  header('Location: login.php');
} else {
  $user = $_SESSION['user'];
}
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="car_form.php" class="nav-link">FORM</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="allCars.php" class="nav-link">Filters</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="logout.php" class="nav-link ">Logout</a>
        </li>

      </ul>
    </nav>
    <!-- /.navbar -->


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="homePage.php" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">HOMEPAGE</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="car_card.php" class="d-block">Cards</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <!-- Car Brands -->

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Car Brands
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="addBrand.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Brand</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="viewBrand.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Brands</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Car colors -->

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Car Colors
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="addColor.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Colors</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="viewColor.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View colors</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Car Engines -->

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Car Engines
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="addEngine.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Engines</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="viewEngine.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Engines</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Car Types -->

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Car Types
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="addType.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Types</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="viewType.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Types</p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Car Details -->

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Car Details
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="car_form.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Car</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="viewCarDetails.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Car Details</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>