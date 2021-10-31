<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    

    <style>
        div#tabelLaporan_filter,
        input.dataTable-input,
        .dataTable-top .dataTable-dropdown,
        .dataTable-top .dataTable-search {
            display: none;
        }
    </style>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Pengaduan</h1>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <label>Filter By Infrastruktur</label>
                                    <div class="panel-heading mt-2">
                                        <select id="filterStatus" name="filterStatus" aria-controls="filterStatus" class="custom-select custom-select-sm form-control form-control-sm form-select">
                                            <option value="">- Pilih Semua Infrastruktur - </option>
                                            <option value="Menunggu">Jalan</option>
                                            <option value="Menunggu">Drainase</option>
                                            <option value="Diterima">Jembatan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <label>Filter By Kab/Kota</label>
                                    <div class="panel-heading mt-2">
                                        <select id="filterStatus" name="filterStatus" aria-controls="filterStatus" class="custom-select custom-select-sm form-control form-control-sm form-select">
                                            <option value=""><i class="bi bi-chevron-down"></i>- Pilih Semua Kab./Kota - </option>
                                            <option value="Menunggu">Kab. Manokwari</option>
                                            <option value="Diterima">Kota Sorong</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <label>Filter By Status</label>
                                    <div class="panel-heading mt-2">
                                        <select id="filterStatus" name="filterStatus" aria-controls="filterStatus" class="custom-select custom-select-sm form-control form-control-sm form-select">
                                            <option value=""><i class="bi bi-chevron-down"></i>- Pilih Semua Status - </option>
                                            <option value="Menunggu">Diterima</option>
                                            <option value="Diterima">Ditolak</option>
                                            <option value="Ditolak">Menunggu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <label>Cari Laporan</label>
                                    <div class="panel-heading mt-2">
                                    <input class="form-control border-1 border-success" type="text" id="kolomcari" placeholder="Ketik kata kunci di sini" >
                                </div>
                                </div>
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table datatable" id="tabelLaporan">
                                <thead>
                                    <tr>
                                        <th>Aksi</th>
                                        <th>Status</th>
                                        <th>Tanggal Laporan</th>
                                        <th>Kode Laporan</th>
                                        <th>Isi Laporan</th>
                                        <th>Infrastruktur</th>
                                        <th>Lokasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pengaduan as $p) :  ?>
                                        <tr>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="" title="Detail"><i class="bi bi-eye"></i></a>

                                                <?php if ($p->status == 'Diterima') { ?>
                                                    <a class="btn btn-danger btn-sm" href=""><i class="bi bi-x-square"></i></a>
                                                <?php } elseif ($p->status == 'Ditolak') { ?>
                                                    <a class="btn btn-success btn-sm" href=""><i class="bi bi-check-square"></i></a>
                                                <?php } else { ?>
                                                    <a class="btn btn-success btn-sm" href="" title="Terima"><i class="bi bi-check-square"></i></a>
                                                    <a class="btn btn-danger btn-sm" href="" title="Tolak"><i class="bi bi-x-square"></i></a>
                                                <?php } ?>
                                            </td>
                                            <td><?php echo $p->status; ?></td>
                                            <td><?php echo $p->tgl_laporan; ?></td>
                                            <td><?php echo $p->kodelaporan; ?></td>
                                            <td><?php echo $p->isi_laporan; ?></td>
                                            <td><?php echo $p->infrastruktur; ?></td>
                                            <td><?php echo $p->nama_ruasjalan; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>

    <script>
    // Custom search bar
    cari_lp = $('#tabelLaporan').DataTable();
    $('#kolomcari').keyup(function(){
          cari_lp.search($(this).val()).draw() ;
    })
    </script>