<?php
include 'src/functions.php';
if(!isset($_SESSION)) {session_start();}
if (isset($_SESSION['login'])) {
  $details = $_SESSION['login'];
  $user= $details['user'];
  $name =$user['firstName']." ".$user['lastName'];
} else {
  die("<script>window.location = './';</script>");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Workspace</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/scss/bootstrap.scss" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-links nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-danger badge-number">2</span>
          </a><!-- End Notification Icon -->

        </li><!-- End Notification Nav -->
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?=$user['firstName'] ?></span>
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?=$name?></h6>
              <span><?=$user['role']?></span><br>
              <span><?=$user['email']?></span><br>
              <span><?=$user['phone']?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#!">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="src/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->


      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar" style="z-index:80000;top:0;">

    <ul class="sidebar-nav" id="sidebar-nav" >
      <center><p class="align-items-center">
        <img class="logo d-flex align-items-center w-auto" height="120px" src="assets/img/logo.png" alt="">
      </p></center>
      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-columns-gap"></i>
          <span>Workspace</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="clients.php">
          <i class="fa fa-users"></i>
          <span>Clients</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="tasks.php">
          <i class="bi bi-list-check"></i>
          <span>Tasks</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="appointment.php">
          <i class="bi bi-calendar-month-fill"></i>
          <span>Appointment</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="case.php">
          <i class="bi bi-card-list"></i>
          <span>Case</span>
        </a>
      </li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Your Workspace</h1>
      <pre>
      <?php //print_r($details); ?>
      </pre>
      <p class="text-muted">Welcome, <?=$name?></p>
      <?php //print_r(json_decode(fetchCaseNotes($details['token']))); ?>
    </div><!-- End Page Title -->
    <div class="row">
      <p style="margin-top:20px;">Overview</p>
      <div class="card" style="border-top:15px solid orange !important;">
            <div class="card-header" style="background:#fbf6eb;font-weight:bold;color:000;"><span style="padding-left:15px">Today's Agenda</span></div>
            <div class="card-body">
              <p></p>
                <p class="card-text" style="padding-left:30px;margin-top:50px;margin-bottom:70px">
                    You don't have any event schedule for today. <span style="color: #ddaa33">Add</span>
                </p>
            </div>
        </div>
        <div class="card" style="border-top:15px solid orange !important;">
              <div class="card-header" style="background:#fbf6eb;"><span style="padding-left:15px;;color:000;font-weight:bold;">Task that are due</span><span class="pull-right" style="margin-right:85px;color: #ddaa33">View Task Report <i class="bi bi-arrow-right"></i></span></div>
              <div class="card-body">

                <div class="row" style="background:#fbf6eb; margin:15px;padding:20px;">
                  <p><b>Follow up with</b> <span style="color: #ddaa33">Odusote</span></p>
                  <div class="col-md-3">
                    <p>Due on: 1/21/2021</p>
                  </div>
                  <div class="col-md-3">
                    <p>Creatd On: 1/15/2021</p>
                  </div>
                </div>
                  <p class="card-text" style="margin-bottom:70px">
                  </p>
              </div>
          </div>
    </div>



  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
