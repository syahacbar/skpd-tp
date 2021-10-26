<main id="main" class="main">

    <div class="pagetitle">
        <h1>Akun Pengguna</h1>
    </div>
    <!-- Filter dan Picker -->
    <div class="row mb-4">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card mb-4 pt-3">
                <div class="card-body">
                    <table class="table datatable" id="datatablesSimple">
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