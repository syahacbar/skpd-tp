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
                    <!-- <?php // echo form_open('admin/cetak', array('id' => 'formfiltercetak', 'target' => '_blank')); 
                            ?> -->
                    <div class="row">
                        <label for="country" class="control-label">Jenis Infrastruktur</label>
                        <select id="filterStatus" name="filterStatus" aria-controls="filterStatus" class="custom-select custom-select-sm form-control form-control-sm form-select"></i>
                            <option value="">- Pilih Semua Infrastruktur - </option>
                            <option value="Menunggu">Jalan</option>
                            <option value="Menunggu">Drainase</option>
                            <option value="Diterima">Jembatan</option>
                        </select>
                    </div>
                    <br>
                    <div class="row">
                        <label for="country" class="control-label">Kabupaten/Kota</label>
                        <div class="col">
                            <select class="form-control" name="kabupaten" id="kabupaten">
                                <option value="semua">- Semua Kabupaten/Kota -</option>
                                <!-- <?php
                                        //foreach ($kabupaten as $kab) {
                                        //echo '<option value="' . $kab->kode . '">' . $kab->nama . '</option>';
                                        //}
                                        ?> -->
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <label class="control-label" for="datetimepick">Rentang Waktu</label>
                        <div class='col'>
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type="date" class="form-control" name="startdate" id="datetimepick" placeholder="Pilih Tanggal Awal">
                                </div>
                            </div>
                        </div>
                        <div class='col'>
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker2'>
                                    <input type="date" class="form-control" name="todate" id="datetimepick" placeholder="Pilih Tanggal Akhir">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <label for="country" class="control-label">Pilih Format Laporan</label>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="RBFormatCetak" id="RBInfrastruktur" value="cetakpdf" required>
                                        <label class="form-check-label">PDF</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="RBFormatCetak" id="RBInfrastruktur" value="cetakexcel" required>
                                        <label class="form-check-label">EXCEL</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <label for="country" class="control-label">Pilih Status Pelaporan</label>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="RBStatuslap" value="Diterima">
                                        <label class="form-check-label">Diterima</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="RBStatuslap" value="Ditolak">
                                        <label class="form-check-label">Ditolak</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <label for="country" class="control-label">Dengan Gambar Dokumentasi</label>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="RBDok" value="1">
                                        <label class="form-check-label">Ya</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="RBDok" value="0">
                                        <label class="form-check-label">Tidak</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="input-group">
                            <button class="btn btn-sm btn-primary" type="submit">Download</button>
                        </div>
                    </div>

                </div>
                <!-- <?php // echo form_close(); 
                        ?> -->
            </div>
        </div>
    </div>
</main>