<?php

// When executed in a browser, this script will prompt for download 
// of 'test.xls' which can then be opened by Excel or OpenOffice.

require '../libraries/excel.php'; //:p
require '../config.php'; //:p


// 'browser' tells the library to stream the data directly to the browser.
// other options are 'file' or 'string'
// 'test.xls' is the filename that the browser will use when attempting to 
// save the download
$exporter = new ExportDataExcel('browser', 'Data RAB.xls');

$exporter->initialize(); // starts streaming data to web browser

// pass addRow() an array and it converts it to Excel XML format and sends 
// it to the browser
$exporter->addRow(array("Kode RAB", "Nama RAB", "Nama Proyek", "Nama Karyawan", "Jumlah", "Satuan", "Harga Satuan", "Total Harga", "Periode", "Keterangan")); 

//$result = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY id_barang DESC");
$result = mysqli_query($koneksi, "SELECT rab.*, proyek.nama_proyek, karyawan.nama_karyawan, satuan.nama_satuan FROM rab join proyek on proyek.id_proyek=rab.id_proyek join karyawan on karyawan.id_karyawan=rab.id_karyawan join satuan on satuan.id_satuan=rab.id_satuan ");

while($data = mysqli_fetch_array($result)) { 

$exporter->addRow(array($data['id_rab'], $data['nama_rab'], $data['nama_proyek'], $data['nama_karyawan'], $data['jumlah'], $data['nama_satuan'], $data['harga_satuan'], $data['total_harga'], $data['periode'], $data['keterangan']));

}
$exporter->finalize(); // writes the footer, flushes remaining data to browser.

exit(); // all done

?>