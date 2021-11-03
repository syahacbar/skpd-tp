<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

  <!-- CSS Bootstrap 3 -->
  <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'/>
    <style>
        div#tabelLaporan_filter,
        input.dataTable-input,
        .dataTable-top .dataTable-dropdown,
        .dataTable-top .dataTable-search {
            display: none;
        }

.panel-heading {
    padding: 0;
    margin: 0 !important;
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
                                        <select id="pilihinfrastruktur" name="pilihinfrastruktur" aria-controls="pilihinfrastruktur" class="custom-select custom-select-sm form-control form-control-sm form-select">
                                            <option value="0">- Pilih Semua Infrastruktur - </option>
                                            <option value="Jalan">Jalan</option>
                                            <option value="Drainase">Drainase</option>
                                            <option value="Jembatan">Jembatan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <label>Filter By Kab/Kota</label>
                                    <div class="panel-heading mt-2">
                                        <select id="pilihlokasi_kabkota" name="pilihlokasi_kabkota" aria-controls="pilihlokasi_kabkota" class="custom-select custom-select-sm form-control form-control-sm form-select">
                                            <option value="0"><i class="bi bi-chevron-down"></i>- Pilih Semua Kab./Kota - </option>
                                                <?php
                                                foreach ($kabupaten as $kab) {
                                                    echo '<option value="' . $kab->kode . '">' . $kab->nama . '</option>';
                                                } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3">
                                    <label>Filter By Status</label>
                                    <div class="panel-heading mt-2">
                                        <select id="pilihstatus" name="pilihstatus" aria-controls="pilihstatus" class="custom-select custom-select-sm form-control form-control-sm form-select">
                                            <option value="0"><i class="bi bi-chevron-down"></i>- Pilih Semua Status - </option>
                                            <option value="Diterima">Diterima</option>
                                            <option value="Ditolak">Ditolak</option>
                                            <option value="Menunggu">Menunggu</option>
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
                                        <th>Kabupaten/Kota</th>
                                        <th>Isi Laporan</th>
                                        <th>Infrastruktur</th>
                                        <th>Lokasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pengaduan as $p) :  ?>
                                        <tr>
                                            <td>
                                                <button class="btn btn-info btn-sm" href="" title="Detail" data-toggle="modal" data-target="#detailLaporan"><i class="bi bi-eye"></i></button>

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
                                            <td><?php echo ucwords(strtolower($p->nama_kabkota));?></td>
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

<!-- Modal -->
<div class="modal fade" id="detailLaporan" tabindex="-1" role="dialog" aria-labelledby="detailLaporanLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailLaporanLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/searchpanes/1.4.0/js/dataTables.searchPanes.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
    // Custom search bar
    cari_lp = $('#tabelLaporan').DataTable();
    $('#kolomcari').keyup(function(){
          cari_lp.search($(this).val()).draw() ;
    })
    </script>

<script>
<script type="text/javascript">
    var save_method; //for save method string
    var tabelLaporan;

    $(document).ready(function() {
        var tabelLaporan = $('#tabelLaporan').DataTable({
        
            "language": {
            "emptyTable": "Tidak ada data yang ditampilkan. Pilih opsi filter diatas untuk menampilkan data"
            },
        });

        function load_data(is_infrastruktur,is_lokasi_kabkota,is_status){
            var tabelLaporan = $('#tabelLaporan').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
                },
                "processing": true,
                "serverSide": true,
                "stateSave": false,
                "order": [],
                "columnDefs": [ {
                    "targets": 0,
                    "orderable": false,
                    "width": "8%",
                    "className": "text-center"
                },
                {
                    "targets": 1,
                    "orderable": false,
                },
                {
                    "targets": -1,
                    "orderable": false,
                    "width": "12%", 
                    "className": "text-center"
                }  ],
                // "scrollY":        "300px",
          //       "scrollX":        true,
                //"scrollCollapse": true,
                //"paging":         false,
                "fixedColumns":{
                    "left": 1,
                    "right": 1
                },

            });

            tabelLaporan.search('').draw();
        }
$(document).on('change', '#pilihinfrastruktur', function(){
            var tabelLaporan = $('#tabelLaporan').DataTable();
            var infrastruktur = $('#pilihinfrastruktur').val();
            var lokasi_kabkota = $('#pilihlokasi_kabkota').val();
            var status = $('#pilihstatus').val();
            tabelLaporan.destroy();
            if(infrastruktur != '')
            {
                load_data(infrastruktur);
                //tabelLaporan.search('').draw();
            }
            else
            {
                load_data();
            }
            //tabelLaporan.search('').draw();
        });

        $(document).on('change', '#pilihlokasi_kabkota', function(){
            var tabelLaporan = $('#tabelLaporan').DataTable();
            var lokasi_kabkota = $('#pilihlokasi_kabkota').val();
            var infrastruktur = $('#pilihinfrastruktur').val();
            var status = $('#pilihstatus').val();
            tabelLaporan.destroy();
            if(lokasi_kabkota != '')
            {
                load_data(infrastruktur,lokasi_kabkota,status);
                //tabelLaporan.search('').draw();
            }
            else
            {
                load_data();
            }
        });

        $(document).on('change', '#pilihstatus', function(){
            var tabelLaporan = $('#tabelLaporan').DataTable();
            var infrastruktur = $('#pilihinfrastruktur').val();
            var lokasi_kabkota = $('#pilihlokasi_kabkota').val();
            var status = $('#pilihstatus').val();
            tabelLaporan.destroy();
            if(status != '')
            {
                load_data(infrastruktur,lokasi_kabkota,status);
            }
            else
            {
                load_data();
            }
        });

        function reload_table(){
            $('#tabelLaporan').DataTable().ajax.reload(null, false);
        } 
</script>

<!--     <script>
$(document).ready(function (){
    var table = $('#tabelLaporan').DataTable({
        dom: 'lrtip'
        // paging: false,
        // searching: false
    });
    
    $('#filterstatus').on('change', function(){
       table.search(this.value).draw();   
    });

    $('#filterkabkota').on('change', function(){
       table.search(this.value).draw();   
    });

    $('#filterinfra').on('change', function(){
       table.search(this.value).draw();   
    });
});
 

    </script> -->
