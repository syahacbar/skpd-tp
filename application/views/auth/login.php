<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login - SKPD-TP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>/assets/backend/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>/assets/backend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>/assets/backend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/backend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/backend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/backend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/backend/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/backend/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/backend/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>/assets/backend/assets/css/style.css" rel="stylesheet">
<style>
body {
    width: 100%;
    height: 100 vh;
    background-image: url(../assets/frontend/assets/images/banner-bg.png);
    background-repeat: no-repeat;
    background-position: right center;
    background-size: contain;
}

.btn-loginpage {
    background: linear-gradient(90deg, rgba(244, 129, 63, 1) 0%, rgba(243, 119, 73, 1) 51%, rgba(241, 86, 105, 1) 100%);
    border: 0;
    border-radius: 30px;
  }

  .card-loginpage {
    border-radius: 30px;
    backdrop-filter: blur(16px) saturate(180%);
    -webkit-backdrop-filter: blur(16px) saturate(180%);
    background-color: rgba(255, 255, 255, 0.75);
    border-radius: 12px;
    border: 1px solid rgba(209, 213, 219, 0.3);
}

</style>
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-st">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <!-- <img src="assets/img/logo.png" alt=""> -->
                  <span class="d-none d-lg-block">Selamat Datang</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3 card-loginpage">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4"></h5>
                    <p class="text-center small">Silakan login dengan menginput email/nama pengguna dan kata sandi Anda pada kolom di bawah ini.</p>
                  </div>

                  <!-- <form class="row g-3 needs-validation" novalidate> -->
                    <?php echo form_open("auth/login");?>

                    <div class="col-12">
                      <label for="identity" class="form-label">Email/Username</label>
                        <input type="text" name="identity" class="form-control" id="identity" required>
                        <div class="invalid-feedback">Email atau Nama Pengguna harus diisi!</div>
                    </div>

                    <div class="col-12 mt-3">
                      <label for="password" class="form-label">Kata Sandi</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Kata sandi harus diisi!</div>
                    </div>

                    <div class="col-12 mb-3 mt-3">
                      <p class="small mb-0 text-center"><a href="<?php echo base_url('auth/forgot_password') ?>">Lupa kata sandi?</a></p>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100 btn-loginpage" name="submit" type="submit">MASUK</button>
                    </div>

                  <?php echo form_close();?>

                  <!-- </form> -->

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
  <script src="<?php echo base_url();?>/assets/backend/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="<?php echo base_url();?>/assets/backend/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url();?>/assets/backend/assets/vendor/quill/quill.min.js"></script>
  <script src="<?php echo base_url();?>/assets/backend/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url();?>/assets/backend/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo base_url();?>/assets/backend/assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?php echo base_url();?>/assets/backend/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url();?>/assets/backend/assets/vendor/echarts/echarts.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url();?>/assets/backend/assets/js/main.js"></script>

</body>

</html>