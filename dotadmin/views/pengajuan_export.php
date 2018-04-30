<?php

// When executed in a browser, this script will prompt for download 
// of 'test.xls' which can then be opened by Excel or OpenOffice.

require '../libraries/excel.php'; //:p
require '../config.php'; //:p


// 'browser' tells the library to stream the data directly to the browser.
// other options are 'file' or 'string'
// 'test.xls' is the filename that the browser will use when attempting to 
// save the download
$exporter = new ExportDataExcel('browser', 'Data Pengajuan.xls');

$exporter->initialize(); // starts streaming data to web browser

// pass addRow() an array and it converts it to Excel XML format and sends 
// it to the browser
$exporter->addRow(array("Kode Pengajuan", "Nama Karyawan", "Jenis Pengajuan", "Nama Pengajuan", "Biaya", "Foto Pengajuan", "Alasan", "Tanggal Pengajuan", "Status Pengajuan", "Kode Rab")); 

//$result = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY id_barang DESC");
//iner join
$result = mysqli_query($koneksi, "SELECT pengajuan.*, karyawan.nama_karyawan, jenis_pengajuan.nama_jenispengajuan, rab.nama_rab FROM pengajuan join karyawan on karyawan.id_karyawan=pengajuan.id_karyawan join jenis_pengajuan on jenis_pengajuan.id_jenispengajuan=pengajuan.id_jenispengajuan join rab on rab.id_rab=pengajuan.id_rab ");


while($data = mysqli_fetch_array($result)) { 

$exporter->addRow(array($data['id_pengajuan'], $data['nama_karyawan'], $data['nama_jenispengajuan'], $data['nama_pengajuan'], $data['biaya'], $data['foto_pengajuan'], $data['alasan'], $data['tgl_pengajuan'], $data['status_pengajuan'], $data['nama_rab']));

}
$exporter->finalize(); // writes the footer, flushes remaining data to browser.

exit(); // all done

?>