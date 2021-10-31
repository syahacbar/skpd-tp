<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login - SKPD-TP</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

</style>
<style>
.modal-dialog .modal-content {
    backdrop-filter: blur(16px) saturate(180%);
    -webkit-backdrop-filter: blur(16px) saturate(180%);
    background-color: rgba(255, 255, 255, 0.75);
    border-radius: 12px;
    border: 1px solid rgba(209, 213, 219, 0.3);
}

div#tablePengguna_filter {
    display: none;
}
</style>
</head>
<body>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Akun Pengguna</h1>
    </div>
    <!-- Filter dan Picker -->
    <div class="row mb-4">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalRegister">Buat User Baru</button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0">
                        <input class="form-control border-1 border-success" type="text" id="kolomcari" placeholder="Cari User" >
                    </div>
                </div>

                <div class="card-body mt-1">
                    <table class="table table-borderless table-striped" id="tablePengguna">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($users as $u) :
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td>
                                        <?php echo $u->first_name . " " . $u->last_name; ?>
                                    </td>
                                    <td>
                                        <?php echo $u->username; ?>
                                    </td>
                                    <td>
                                        <?php echo $u->email; ?>

                                    </td>
                                    <td>
                                        <?php echo ($u->active == '1') ? "Aktif" : "Tidak Aktif"; ?>

                                    </td>
                                    <td>
                                        <?php echo ($u->active == '1') ? '<a class="btn btn-warning btn-sm" href=""><i class="bi bi-power"></i> Nonaktifkan</a>' : '<a class="btn btn-success btn-sm" href=""><i class="bi bi-power"></i> Aktifkan</a>' ?>
                                        <a class="btn btn-primary btn-sm" href=""><i class="bi bi-pencil-square"></i> Edit</a>
                                        <a class="btn btn-danger btn-sm" href=""><i class="bi bi-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>


                    <!-- <p><?php //echo anchor('auth/create_user', 'Create User',array('class'=>'btn btn-xs btn-primary'))
                            ?> </p>
                        <a href=""> -->
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="modalRegisterLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="modalRegisterLabel">Buat Akun User Baru</h5>
        </div>
        <?php echo form_open("auth/create_user"); ?>
            <div class="modal-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-info" role="alert">
                      Semua data wajib diisi!
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="first_name">Nama Depan</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="last_name">Nama Belakang</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="company">Nama Kantor/Perusahan</label>
                    <input type="text" class="form-control" id="company" name="company" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="user_name">Username</label>
                    <input type="text" class="form-control" id="user_name" name="user_name" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                    <label for="phone">Nomor HP</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="password_confirm">Konfirmasi Kata Sandi</label>
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm">
                  </div>
                </div>

            </div>

            </div>
            <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-primary">Buat Akun</button>
            </div>
        <?php echo form_close();?>

    </div>
  </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#tablePengguna').DataTable();
    });

    // Custom search bar
    komomCari = $('#tablePengguna').DataTable();
    $('#kolomcari').keyup(function(){
          komomCari.search($(this).val()).draw() ;
    })
</script>

</body>

</html>