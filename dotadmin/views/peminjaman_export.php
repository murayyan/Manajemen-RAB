<?php

// When executed in a browser, this script will prompt for download 
// of 'test.xls' which can then be opened by Excel or OpenOffice.

require '../libraries/excel.php'; //:p
require '../config.php'; //:p


// 'browser' tells the library to stream the data directly to the browser.
// other options are 'file' or 'string'
// 'test.xls' is the filename that the browser will use when attempting to 
// save the download
$exporter = new ExportDataExcel('browser', 'Data Peminjaman.xls');

$exporter->initialize(); // starts streaming data to web browser

// pass addRow() an array and it converts it to Excel XML format and sends 
// it to the browser
$exporter->addRow(array("Kode Peminjaman", "Nama Karyawan", "Tanggal Peminjaman", "Nama Barang", "Jumlah Barang", "Kondisi Barang", "Merek Barang", "Type Barang", "Warna Barang")); 

//$result = mysqli_query($koneksi, "SELECT * FROM absensi ORDER BY id_karyawan DESC");
//iner join 
$result = mysqli_query($koneksi, "SELECT peminjaman.*, karyawan.nama_karyawan, barang.nama_barang FROM peminjaman join karyawan on karyawan.id_karyawan=peminjaman.id_karyawan join barang on barang.id_barang=peminjaman.id_barang ");

while($data = mysqli_fetch_array($result)) { 

$exporter->addRow(array($data['id_peminjaman'], $data['nama_karyawan'], $data['tgl_peminjaman'], $data['nama_barang'], $data['qty_peminjaman'], $data['kondisi_barang'], $data['merk_barang'], $data['type_barang'], $data['warna_barang']));

}
$exporter->finalize(); // writes the footer, flushes remaining data to browser.

exit(); // all done

?>