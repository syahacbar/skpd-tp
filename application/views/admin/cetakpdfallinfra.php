<?php
$pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetTitle('DATA LAPORAN PENGADUAN');
$pdf->SetHeaderMargin(20);
$pdf->SetTopMargin(10);
$pdf->setFooterMargin(15);
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');
$pdf->setPrintHeader(false);
//$pdf->setPrintFooter(false);
$pdf->SetMargins(5, 10, 5, true);

$pdf->AddPage('L', 'A4');
$html = '
<style>
    table{
        font-size:8;
        margin-left: auto;
        margin-right: auto;
    }
    tr.center{
        text-align:center;
        background-color:#C0C0C0;
        font-weight: bold;
    }
    div.heading{
        text-align:center;
        font-weight:bold;
        font-size:10;
    }

    @media print {
        img {
            width: 150px;
            height: 150px;
            max-height: 150px;
            object-fit: cover;
        }
    }
    
</style>
<div class="heading">DATA PELAPORAN<br>SEMUA INFRASTRUKTUR</div><br>
<table width="100%" border="1" cellpadding="5">
    <tr class="center">
        <th width="30">No.</th>
        <th width="60">Tanggal <br>Pengaduan</th>
        <th width="60">Jenis <br>Infrastruktur</th>
        <th width="100">Isi Laporan/<br>Pengaduan</th>
        <th width="70">Nama/<br>Ruas Jalan</th>
        <th width="60">Kec./Distrik</th>
        <th width="60">Kab./Kota</th>
        <th width="70">Titik Lokasi<br>(Koordinat)</th>
        <th width="70">Nama Pelapor/<br>NIK</th>
        <th width="70">No. HP/<br>Email</th>
        <th width="80">Alamat Lengkap<br>(Sesuai KTP)</th>
        <th width="100">Dokumentasi</th>
    </tr>';
$no = 1;
foreach ($pengaduan as $lap) {
    $noimage = base_url('assets/backend/assets/img/noimage.jpg');
    if ($lap->dokumentasi1 != NULL) {
        $dokumentasi1 = base_url('upload/dokumentasi/') . $lap->dokumentasi1;
    } else {
        $dokumentasi1 = $noimage;
    }
    if ($lap->dokumentasi2 != NULL) {
        $dokumentasi2 = base_url('upload/dokumentasi/') . $lap->dokumentasi2;
    } else {
        $dokumentasi2 = $noimage;
    }
    if ($lap->dokumentasi3 != NULL) {
        $dokumentasi3 = base_url('upload/dokumentasi/') . $lap->dokumentasi3;
    } else {
        $dokumentasi3 = $noimage;
    }
    $html .= '
<tr>
    <td align="center">' . $no++ . '</td>
    <td>' . shortdate_indo(substr($lap->tgl_laporan,0,10)) . '</td>
    <td>' . $lap->infrastruktur . '</td>
    <td>' . $lap->isi_laporan . '</td>
    <td>' . $lap->nama_ruasjalan . '</td>
    <td>' . $lap->nama_distrik . '</td>
    <td>' . $lap->nama_kabkota . '</td>
    <td>' . $lap->latitude . ', ' . $lap->longitude . '</td>
    <td>' . $lap->nama_pelapor . '<br>' . $lap->nik . '</td>
    <td>' . $lap->no_hp . '<br>' . $lap->email . '</td>
    <td>' . $lap->alamat_pelapor . '</td>
    <td>
        <img style="image-resolution: 96dpi; height:100px" src="' . $dokumentasi1 . '"><br>
        <img style="image-resolution: 96dpi; height:100px" src="' . $dokumentasi2 . '"><br>
        <img style="image-resolution: 96dpi; height:100px" src="' . $dokumentasi3 . '">
    </td>
</tr>';
}
$html .= '</table>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('DATA LAPORAN PENGADUAN.pdf', 'I');
