<?php

// When executed in a browser, this script will prompt for download 
// of 'test.xls' which can then be opened by Excel or OpenOffice.

require '../libraries/excel.php'; //:p
require '../config.php'; //:p


// 'browser' tells the library to stream the data directly to the browser.
// other options are 'file' or 'string'
// 'test.xls' is the filename that the browser will use when attempting to 
// save the download
$exporter = new ExportDataExcel('browser', 'Data Barang Keluar.xls');

$exporter->initialize(); // starts streaming data to web browser

// pass addRow() an array and it converts it to Excel XML format and sends 
// it to the browser
$exporter->addRow(array("Kode Barang Keluar", "Nama Barang", "Jumlah", "Merek", "Type", "Warna", "Kondisi", "Lokasi Barang", "Tanggal Keluar", "Keterangan")); 

//$result = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY id_barang DESC");
$result = mysqli_query($koneksi, "SELECT barang_keluar.*, barang.nama_barang, lokasi.nama_lokasi FROM barang_keluar join barang on barang_keluar.id_barang = barang.id_barang join lokasi on barang_keluar.id_lokasi=lokasi.id_lokasi");

while($data = mysqli_fetch_array($result)) { 

$exporter->addRow(array($data['id_barangkeluar'], $data['nama_barang'], $data['jumlah_barang'], $data['merk_barang'], $data['type_barang'], $data['warna_barang'], $data['kondisi_barang'], $data['nama_lokasi'], $data['tgl_keluar'], $data['keterangan']));

}
$exporter->finalize(); // writes the footer, flushes remaining data to browser.

exit(); // all done

?>