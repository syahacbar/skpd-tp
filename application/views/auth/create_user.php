<!-- <h1><?php// echo lang('create_user_heading');?></h1>
<p><?php// echo lang('create_user_subheading');?></p>

<div id="infoMessage"><?php// echo $message;?></div>


      <p>
            <?php// echo lang('create_user_fname_label', 'first_name');?> <br />
            <?php// echo form_input($first_name);?>
      </p>

      <p>
            <?php //echo lang('create_user_lname_label', 'last_name');?> <br />
            <?php //echo form_input($last_name);?>
      </p>
      
      <?php
      //if($identity_column!=='email') {
          // echo '<p>';
          // echo lang('create_user_identity_label', 'identity');
          // echo '<br />';
          // echo form_error('identity');
          // echo form_input($identity);
          // echo '</p>';
      //}
      ?>

      <p>
            <?php// echo lang('create_user_company_label', 'company');?> <br />
            <?php //echo form_input($company);?>
      </p>

      <p>
            <?php //echo lang('create_user_email_label', 'email');?> <br />
            <?php //echo form_input($email);?>
      </p>

      <p>
            <?php //echo lang('create_user_phone_label', 'phone');?> <br />
            <?php //echo form_input($phone);?>
      </p>

      <p>
            <?php //echo lang('create_user_password_label', 'password');?> <br />
            <?php //echo form_input($password);?>
      </p>

      <p>
            <?php //echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
            <?php //echo form_input($password_confirm);?>
      </p>


      <p><?php// echo form_submit('submit', lang('create_user_submit_btn'));?></p>

<?php// echo form_close();?>
 -->

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
</style>
</head>
<body>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalRegister">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="modalRegisterLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalRegisterLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <?php echo form_open("auth/create_user"); ?>

              <div class="form-group">
                <label for="first_name">Nama Depan</label>
                <input type="text" class="form-control" id="first_name" name="first_name">
              </div>

              <div class="form-group">
                <label for="last_name">Nama Belakang</label>
                <input type="text" class="form-control" id="last_name" name="last_name">
              </div>

              <div class="form-group">
                <label for="company">Nama Kantor/Perusahan</label>
                <input type="text" class="form-control" id="company" name="company">
              </div>

              <div class="form-group">
                <label for="company">Nama Kantor/Perusahan</label>
                <input type="text" class="form-control" id="company" name="company">
              </div>
              
              <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>

                <div class="form-group">
                <label for="phone">Nomor HP</label>
                <input type="text" class="form-control" id="phone" name="phone">
              </div>

              <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="text" class="form-control" id="password" name="password">
              </div>

              <div class="form-group">
                <label for="password_confirm">Konfirmasi Kata Sandi</label>
                <input type="text" class="form-control" id="password_confirm" name="password_confirm">
              </div>

              <button type="submit" name="submit" class="btn btn-primary">Submit</button>

            <?php echo form_close();?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
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