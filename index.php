<?php
  if(!isset($_SESSION)) {session_start();}
  if (isset($_SESSION['login'])) {
    die("<script>window.location = 'workspace.php';</script>");
  }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
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
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="pt-4 pb-2">
                        <h5 class="card-title text-left pb-0 fs-4">Login</h5>
                        <p class="text-right small">Login to Your Account</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="pt-4 pb-2">
                        <img class="logo d-flex align-items-center w-auto" height="100px" src="assets/img/logo.png" alt="">
                      </div>

                    </div>
                  </div>


                  <form class="row g-3 needs-validation" action="#" id="login_form" novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <input type="text" name="email" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <input type="text" name="login" value="login" hidden>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-12 mt-3">
                      <p id="results"></p>
                    </div>
                    <div class="col-12 mt-3">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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

  <script type="text/javascript">
  $('#login_form').on('submit', function (e) {
              $('#results').html('<div class="spinner-border text-primary m-1" role="status"> <span class="sr-only"></span></div>');
              e.preventDefault();

              $.ajax({
                type: 'post',
                url: 'src/ajax.php',
                data: $('#login_form').serialize(),
                success: function (data) {

                  data=JSON.parse(data);
                  console.log(data);
                  if(data.message=="login successful"){
                    $('#results').html("<span class='text-success'>"+data.message+"</span>");
                    window.location = 'workspace.php';
                  }else {
                    $('#results').html("<span class='text-danger'>"+data.message+"</span>");
                  }

                }
              });

            });
  </script>

</body>

</html>
