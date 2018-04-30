<?php

// When executed in a browser, this script will prompt for download 
// of 'test.xls' which can then be opened by Excel or OpenOffice.

require '../libraries/excel.php'; 
require '../config.php'; 


// 'browser' tells the library to stream the data directly to the browser.
// other options are 'file' or 'string'
// 'test.xls' is the filename that the browser will use when attempting to 
// save the download
$exporter = new ExportDataExcel('browser', 'Data Pembeli.xls');

$exporter->initialize(); // starts streaming data to web browser

// pass addRow() an array and it converts it to Excel XML format and sends 
// it to the browser
$exporter->addRow(array("Kode Pembeli", "Nama Pengajuan", "Nama Karyawan", "Tanggal Beli", "Anggaran", "Attachment")); 

//$result = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY id_barang DESC");
$result = mysqli_query($koneksi, "SELECT pembeli.*, pengajuan.nama_pengajuan, karyawan.nama_karyawan FROM pembeli join pengajuan on pengajuan.id_pengajuan = pembeli.id_pengajuan join karyawan on karyawan.id_karyawan=pembeli.id_karyawan  ");

while($data = mysqli_fetch_array($result)) { 

$exporter->addRow(array($data['id_pembeli'], $data['nama_pengajuan'], $data['nama_karyawan'], $data['tgl_beli'], $data['anggaran'], $data['attachment']));

}
$exporter->finalize(); // writes the footer, flushes remaining data to browser.

exit(); // all done

?>