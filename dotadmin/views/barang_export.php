<?php

// When executed in a browser, this script will prompt for download 
// of 'test.xls' which can then be opened by Excel or OpenOffice.

require '../libraries/excel.php'; 
require '../config.php'; 


// 'browser' tells the library to stream the data directly to the browser.
// other options are 'file' or 'string'
// 'test.xls' is the filename that the browser will use when attempting to 
// save the download
$exporter = new ExportDataExcel('browser', 'Data Barang.xls');

$exporter->initialize(); // starts streaming data to web browser

// pass addRow() an array and it converts it to Excel XML format and sends 
// it to the browser
$exporter->addRow(array("Kode Barang", "Nama Barang", "Kategori Barang", "Jenis Barang", "Jumlah", "Merek", "Type", "Warna", "Kondisi", "Lokasi", "Foto", "Tanggal Beli")); 

//$result = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY id_barang DESC");
$result = mysqli_query($koneksi, "SELECT barang.*, kategori_barang.nama_kategoribarang, jenis_barang.nama_jenisbarang, lokasi.nama_lokasi FROM barang join kategori_barang on kategori_barang.id_kategoribarang = barang.id_kategoribarang join jenis_barang on jenis_barang.id_jenisbarang=barang.id_jenisbarang join lokasi on lokasi.id_lokasi=barang.id_lokasi ");

while($data = mysqli_fetch_array($result)) { 

$exporter->addRow(array($data['id_barang'], $data['nama_barang'], $data['nama_kategoribarang'], $data['nama_jenisbarang'], $data['jumlah_barang'], $data['merk_barang'], $data['type_barang'], $data['warna_barang'], $data['kondisi_barang'], $data['nama_lokasi'], $data['foto_barang'], $data['tgl_beli']));

}
$exporter->finalize(); // writes the footer, flushes remaining data to browser.

exit(); // all done

?>