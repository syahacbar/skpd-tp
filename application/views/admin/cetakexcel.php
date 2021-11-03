<?php
// header("Content-Type: application/force-download");
// header("Cache-Control: no-cache, must-revalidate");
// header("Expires: Sat, 26 Jul 2010 05:00:00 GMT");
// header("content-disposition: attachment;filename=" . $filename . ".xls");

?>

<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
  <h2 align="center">DATA LAPORAN PENGADUAN SKPD-TP</h2><br>
  INFRASTRUKTUR : <?php echo ($infrastruktur != NULL) ? strtoupper($infrastruktur) : ''; ?><br>
  KAB/KOTA : <?php echo ($kabkota != NULL) ? strtoupper($kabkota) : ''; ?><br>
  RANGE TANGGAL : <?php echo ($range != NULL) ? $range : ''; ?><br>
  STATUS PELAPORAN : <?php echo ($status != NULL) ? $status : ''; ?><br>

  <table border=1>
    <tr>
      <th rowspan="2">No.</th>
      <th rowspan="2">Tanggal Dilaporkan</th>
      <th rowspan="2">Kode Laporan</th>
      <th colspan="7">Data Pelapor (Sesuai KTP)</th>
      <th colspan="6">Lokasi Infrasstruktur Yang Dilaporkan</th>
    </tr>
    <tr>
      <th>Nama Pelapor/NIK</th>
      <th>No. HP (+62)</th>
      <th>Email</th>
      <th>Alamat</th>
      <th>Kelurahan/Kampung</th>
      <th>Kec/Distrik</th>
      <th>Kab/Kota</th>
      <th>Jenis Infrastruktur</th>
      <th>Isi Laporan/Pengaduan</th>
      <th>Nama/ Ruas Jalan</th>
      <th>Kec/Distrik</th>
      <th>Kab/Kota</th>
      <th>Titik Lokasi (Koordinat)</th>
    </tr>
    <?php $no = 1;
    foreach ($pengaduan as $lap) { ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo date_indo(substr($lap->tgl_laporan,0,10)); ?></td>
        <td><?php echo $lap->kodelaporan; ?></td>
        <td><?php echo $lap->nama_pelapor; ?></td>
        <td><?php echo $lap->no_hp; ?></td>
        <td><?php echo $lap->email; ?></td>
        <td><?php echo $lap->alamat_pelapor; ?></td>
        <td><?php echo $lap->nama_despelapor; ?></td>
        <td><?php echo $lap->nama_kecpelapor; ?></td>
        <td><?php echo ucwords(strtolower($lap->nama_kabpelapor)); ?></td>
        <td><?php echo $lap->infrastruktur; ?></td>
        <td><?php echo $lap->isi_laporan; ?></td>
        <td><?php echo $lap->nama_ruasjalan; ?></td>
        <td><?php echo $lap->nama_distrik; ?></td>
        <td><?php echo ucwords(strtolower($lap->nama_kabkota)); ?></td>
        <td><?php echo $lap->latitude.", ".$lap->longitude; ?></td>
      </tr>
    <?php } ?>
  </table>



</body>

</html>