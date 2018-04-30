<?php
// When executed in a browser, this script will prompt for download 
// of 'test.xls' which can then be opened by Excel or OpenOffice.

require '../libraries/excel.php'; //:p
require '../config.php'; //:p

$id =  $_SESSION['nama_karyawan'];
// 'browser' tells the library to stream the data directly to the browser.
// other options are 'file' or 'string'
// 'test.xls' is the filename that the browser will use when attempting to 
// save the download
$exporter = new ExportDataExcel('browser', 'Data gajikaryawan.xls');

$exporter->initialize(); // starts streaming data to web browser

// pass addRow() an array and it converts it to Excel XML format and sends 
// it to the browser
			$exporter->addRow(array("id gaji", "tanggal periode", "sampai tanggal", "nama", "gaji pokok", "gaji tunjangan", "bonus")); 

//$result = mysqli_query($koneksi, "SELECT * FROM gaji_karyawan ORDER BY id_gaji DESC");
$result = mysqli_query($koneksi, "SELECT gaji_karyawan.*, karyawan.nama_karyawan, gaji_pokok.gaji, tunjangan.jenis_tunjangan, bonus.keterangan FROM gaji_karyawan join karyawan on karyawan.id_karyawan=gaji_karyawan.id_karyawan join gaji_pokok on gaji_pokok.id_gajipokok = gaji_karyawan.id_gajipokok join tunjangan on tunjangan.id_tunjangan = gaji_karyawan.id_tunjangan join bonus on bonus.id_bonus = gaji_karyawan.id_bonus WHERE karyawan.nama_karyawan LIKE '%$id%' ORDER BY gaji_karyawan.id_karyawan DESC");

while($data = mysqli_fetch_array($result)) { 

$exporter->addRow(array($data['id_gaji'], $data['tanggalperiode'], $data['tanggal_periode'], $data['nama_karyawan'], $data['gaji'], $data['jenis_tunjangan'], $data['keterangan']));

}
$exporter->finalize(); // writes the footer, flushes remaining data to browser.

exit(); // all done

?>