<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Clients</title>
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
        <li class="nav-item pe-3">

          <a class="nav-links" href="#">
            <span class="d-none d-md-block ps-2">Kelin</span>

          </a><!-- End Profile Iamge Icon -->
        </li>
        <li class="nav-item pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">

          </a><!-- End Profile Iamge Icon -->
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
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-columns-gap"></i>
          <span>Workspace</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="clients.php">
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
      <h1>Clients</h1>
      <p class="text-muted">Here's the clients list</p>
    </div><!-- End Page Title -->
    <div class="row">
      <p style="margin-top:20px;"></p>
      <div class="col-md-8" style="margin-bottom:20px;">
        <input type="search" style="font-family: 'Helvetica', FontAwesome, sans-serif;" class="form-control" name="" placeholder="&#xF002;  Search by name, email ...">
      </div>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Residential Address</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th >Rees Alumasa</th>
            <td>reesalumasa@gmail.com</td>
            <td>0792756002</td>
            <td>Madaraka Estate</td>
            <td></td>
          </tr>
          <tr>
            <th >Rees Alumasa</th>
            <td>reesalumasa@gmail.com</td>
            <td>0792756002</td>
            <td>Madaraka Estate</td>
            <td></td>
          </tr>
          <tr>
            <th >Rees Alumasa</th>
            <td>reesalumasa@gmail.com</td>
            <td>0792756002</td>
            <td>Madaraka Estate</td>
            <td></td>
          </tr>
          <tr>
            <th >Rees Alumasa</th>
            <td>reesalumasa@gmail.com</td>
            <td>0792756002</td>
            <td>Madaraka Estate</td>
            <td></td>
          </tr>
        </tbody>
      </table>
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
