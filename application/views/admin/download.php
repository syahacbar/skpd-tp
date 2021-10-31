<main id="main" class="main">

    <div class="pagetitle">
        <h1>Download Data Pengaduan</h1>
    </div>

    <!-- Filter dan Picker -->
    <div class="row mb-4">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-filter me-1"></i>
                    Filter Data Laporan/Pengaduan Yang Akan Diunduh
                </div>
                <div class="card-body">
                    <form target="_blank" action="<?php echo site_url('admin/download/cetakpdf/');?>" method="POST">
                        <div class="row mt-3">
                            <div class="col">
                                <div class="row mt-3">
                                    <div class="col-sm-6">
                                        <label for="country" class="control-label">Jenis Infrastruktur</label>
                                        <select id="pilihinfra" name="pilihinfra" aria-controls="pilihinfra" class="custom-select custom-select-sm form-control form-control-sm form-select">
                                            <option value="Semua">- Pilih Semua Infrastruktur - </option>
                                            <option value="Jalan">Jalan</option>
                                            <option value="Drainase">Drainase</option>
                                            <option value="Jembatan">Jembatan</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="country" class="control-label">Kabupaten/Kota</label>
                                        <div class="col">
                                            <select class="form-control" name="kabupaten" id="kabupaten">
                                                <option value="Semua">- Semua Kabupaten/Kota -</option>
                                                <?php
                                                foreach ($kabupaten as $kab) {
                                                    echo '<option value="' . $kab->kode . '">' . $kab->nama . '</option>';
                                                } ?>
                                            </select>
                                        </div>
                                    </div> 
                                </div>

                                <div class="row mt-3">
                                    <div class="col-sm-12">
                                        <!-- <label class="control-label" for="datetimepick">Rentang Waktu</label> -->
                                        <div class="alert alert-info" role="alert">
                                            <strong>Rentang Waktu:</strong> Pilih batas awal dan akhir laporan yang akan diambil.
                                        </div>
                                    </div>


                                    <div class='col-sm-6'>
                                        <label>Dari Tanggal</label>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type="date" class="form-control" name="startdate" id="datetimepick" placeholder="Pilih Tanggal Awal">
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-sm-6'>
                                        <label>Ke Tanggal</label>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker2'>
                                                <input type="date" class="form-control" name="todate" id="datetimepick" placeholder="Pilih Tanggal Akhir" value="<?php echo date('Y-m-d');?>">
                                            </div>
                                        </div>
                                    </div>             
                                </div>  

                                <div class="row mt-3"> 
                                    <div class="col-lg-12">
                                        <label for="country" class="control-label">Pilih Format Laporan</label>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="formatcetak" id="pilihinfra" value="cetakpdf" required>
                                            <label class="form-check-label">PDF</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="formatcetak" id="pilihinfra" value="cetakexcel" required>
                                            <label class="form-check-label">EXCEL</label>
                                        </div>
                                    </div>
                                </div>  

                                <div class="row mt-3">
                                    <div class="col-sm-12">
                                        <label for="country" class="control-label">Pilih Status Pelaporan</label>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="statuslaporan" value="Menunggu" required>
                                            <label class="form-check-label">Menunggu</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="statuslaporan" value="Diterima" required>
                                            <label class="form-check-label">Diterima</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="statuslaporan" value="Ditolak" required>
                                            <label class="form-check-label">Ditolak</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-sm-12">
                                        <label for="country" class="control-label">Dengan Gambar Dokumentasi</label>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="pilihangambar" value="1" required>
                                            <label class="form-check-label">Ya</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="pilihangambar" value="0" required>
                                            <label class="form-check-label">Tidak</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="input-group">
                                        <button class="btn btn-sm btn-primary" name="btnFilter" type="submit">Download</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>


                </div>
            </div>


        </div>
    </div>
</main>