<?php

// When executed in a browser, this script will prompt for download 
// of 'test.xls' which can then be opened by Excel or OpenOffice.

require '../libraries/excel.php'; //:p
require '../config.php'; //:p


// 'browser' tells the library to stream the data directly to the browser.
// other options are 'file' or 'string'
// 'test.xls' is the filename that the browser will use when attempting to 
// save the download
$exporter = new ExportDataExcel('browser', 'Data Pengembalian Barang.xls');

$exporter->initialize(); // starts streaming data to web browser

// pass addRow() an array and it converts it to Excel XML format and sends 
// it to the browser
$exporter->addRow(array("Kode Pengembalian", "Kode Peminjaman", "Nama Karyawan", "Nama Barang", "Tanggal Pengembalian", "Jumlah",  "Kondisi Barang", "Lokasi Barang", "Merek", "Type", "Warna")); 

//$result = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY id_barang DESC");
 $result = mysqli_query($koneksi, "SELECT pengembalian.*, karyawan.nama_karyawan, barang.nama_barang, lokasi.nama_lokasi FROM pengembalian join karyawan on karyawan.id_karyawan=pengembalian.id_karyawan join barang on barang.id_barang=pengembalian.id_barang join lokasi on lokasi.id_lokasi=pengembalian.id_lokasi ");

while($data = mysqli_fetch_array($result)) { 

$exporter->addRow(array($data['id_pengembalian'], $data['id_peminjaman'], $data['nama_karyawan'], $data['nama_barang'], $data['tgl_pengembalian'], $data['qty_pengembalian'], $data['kondisi_barang'], $data['nama_lokasi'], $data['merk_barang'], $data['type_barang'], $data['warna_barang']));

}
$exporter->finalize(); // writes the footer, flushes remaining data to browser.

exit(); // all done

?>