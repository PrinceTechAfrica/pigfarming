<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  Computerized Pig Farming System
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="fontawesome/css/fontawesome.css" rel="stylesheet" type="text/css"/>
<link href="fontawesome/css/solid.css" rel="stylesheet" type="text/css"/>
<script src="fontawesome/js/fontawesome.js" type="text/javascript"></script>
<script src="fontawesome/js/solid.js" type="text/javascript"></script>

</head>

<body class=""style="background-color:blue;">
  <div class="wrapper ">
    <div class="sidebar" data-color="yellow"   >
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
    
    
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        <b> Admin Name:<?php echo htmlspecialchars($_SESSION["username"]); ?></b>
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="index.php">
              <i class="fas fa-home"></i>
              Dashboard
            </a>
          </li>

          <li>
            <a href="addstaff.php">
              <i class="fa fa-user"></i>
              Add Staff
            </a>
          </li>
          <li>
            <a href="addstock.php">
              <i class="fas fa-user-plus"></i>
              Add Stock
            </a>
          </li>
         
         
          <li>
            <a href="viewstaff.php">
              <i class="fas fa-eye"></i>
              View Staff
            </a>
          </li>
          <li>
            <a href="viewstock.php">
              <i class="fas fa-user-graduate"></i>
              View Stock
            </a>
          </li>
         
          <li>
            <a href="orders.php">
            
              <p>Orders</p>
            </a>
          </li>
          
          <li>
          <li><a href="../index.php?l=<?= base64_encode('out') ?>"><i class="fas fa-sign-out-alt"></i>
            <i class='fas fa-user-tie'></i>
              <p>Signout</p>
            </a>
          </li>
         
                 </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel" style="background:milk" >
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
           
     
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
