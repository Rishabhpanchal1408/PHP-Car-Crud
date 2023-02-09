<?php require '../Controller/sql_fun.php' ?>
<!DOCTYPE html>

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
    <!-- custom css -->
    <link rel="stylesheet" href="../dist/css/style.css">
</head>

<body class="hold-transition sidebar-mini">

    <!-- Navbar -->

    <nav class="navbar navbar-expand navbar-light navbar-dark sticky-top">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="dashboard.php  " class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">About Us</a>
            </li>
        </ul>
    </nav>
    <!-- CAROUSEL -->

    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/13649.jpg" alt="Los Angeles" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="../img/13653.jpg" alt="Dodge Charger" width="100%" height="50%">
            </div>
            <div class="carousel-item">
                <img src="../img/13671.jpg" alt="New York" width="1100" height="500">
            </div>
        </div>
    </div>

    <!-- Topic Cards -->
    <div class="w-75 mx-auto">
        <div id="cards_landscape_wrap-2">
            <div class="row">
                <?php
                $result = get_all_car();
                if (isset($result) && !is_null($result)) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="col-3 mb-2 pt-0">
                                <a href="singleCarPage.php?id=' . $row['car_id'] . '">
                                <div class="card-flyer">
                                    <div class="text-box">
                                        <div class="image-box">
                                            <img src="../uploads/' . $row['car_img'] . '"  />
                                        </div>
                                    <div class="text-container">
                                    <p>'  . get_single_brand($row['car_brand']). $row['car_model'] . '</p>
                                    <button class="btn btn-primary btn-block py-2">View Details</button>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div> ';
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
</body>

</html>