<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tasks</title>
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
        <a class="nav-link collapsed" href="clients.php">
          <i class="fa fa-users"></i>
          <span>Clients</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="tasks.php">
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
      <h1>Tasks</h1>
      <p class="text-muted">Here's your tasks list</p>
    </div><!-- End Page Title -->
    <div class="row">
      <p style="margin-top:20px;"></p>
      <div class="col-md-8" style="margin-bottom:20px;">
        <input type="search" style="font-family: 'Helvetica', FontAwesome, sans-serif;" class="form-control" name="" placeholder="&#xF002;  Search...">
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"></h5>

          <!-- Pills Tabs -->
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="border-bottom:1px solid silver;">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All Status</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Not Started</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Completed</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Cancelled</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Declined</button>
            </li>
          </ul>
          <div class="tab-content pt-2" id="myTabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Schedule Training</th>
                    <td>2/1/2021</td>
                    <td>15/1/2021</td>
                    <td><span style="border-radius:0;padding: 2px 30px;background:#fbf6eb;color: #ddaa33;">High</span></td>
                    <td>Not Started</td>
                    <td>
                      <span>
                        <span class="nav-item dropdown pe-3">
                          <i  data-bs-toggle="dropdown" style="cursor:pointer" class="bi bi-three-dots-vertical"></i>

                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li>
                          <a class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                            <span>Edit</span>
                          </a>
                        </li>


                      </ul>
                      </span></td>
                  </tr>
                  <tr>
                    <th>Schedule Training</th>
                    <td>2/1/2021</td>
                    <td>15/1/2021</td>
                    <td><span style="border-radius:0;padding: 2px 30px;background:#fbf6eb;color: red;">Urgent</span></td>
                    <td>Complete</td>
                    <td><span>
                      <span class="nav-item dropdown pe-3">
                        <i  data-bs-toggle="dropdown" style="cursor:pointer" class="bi bi-three-dots-vertical"></i>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                      <li>
                        <a class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                          <span>Edit</span>
                        </a>
                      </li>


                    </ul>
                    </span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="profile-tab">
              Nesciunt totam et. Consequuntur magnam aliquid eos nulla dolor iure eos quia. Accusantium distinctio omnis et atque fugiat. Itaque doloremque aliquid sint quasi quia distinctio similique. Voluptate nihil recusandae mollitia dolores. Ut laboriosam voluptatum dicta.
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="contact-tab">
              Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
            </div>
          </div><!-- End Pills Tabs -->

        </div>
      </div>

    </div>

    <div class="modal fade" id="verticalycentered" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-8">
                <p><b>Update Task Progress</b></p>
                <p></p>
                <p>Schedule training</p>
                <p>Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum.</p>
              </div>
              <div class="col-md-4 pull-right" style="padding:5px">
                <button class="btn btn-danger pull-right" name="button">Urgent</button>
                <p class="pull-right" style="color:brown">Due On:1/4/2021</p>
                <p class="pull-right">Created:1/4/2021</p>
              </div>

            </div>
            <div class="row">
              <div class="col-md-8">
                <p>Change Status</p>
                <select class="form-select">
                  <option value="1">Started</option>
                  <option value="2">On Going</option>
                  <option value="3">Completed</option>
                </select>
              </div>

              <div class="col-md-4">
                <p></p>
                <p style="margin-top:20px"></p>
                <button type="button" class="btn btn-primary pull-right">Update</button>
              </div>
              </div>
            </div>
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
