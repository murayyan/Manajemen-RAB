<?php

// When executed in a browser, this script will prompt for download 
// of 'test.xls' which can then be opened by Excel or OpenOffice.

require '../libraries/excel.php'; //:p
require '../config.php'; //:p


// 'browser' tells the library to stream the data directly to the browser.
// other options are 'file' or 'string'
// 'test.xls' is the filename that the browser will use when attempting to 
// save the download
$exporter = new ExportDataExcel('browser', 'Audit Trails.xls');

$exporter->initialize(); // starts streaming data to web browser

// pass addRow() an array and it converts it to Excel XML format and sends 
// it to the browser
$exporter->addRow(array("Date", "Content", "User")); 

$result = mysqli_query($koneksi, "SELECT audit_trails.*, karyawan.nama_karyawan FROM audit_trails join karyawan on audit_trails.id_karyawan=karyawan.id_karyawan ORDER BY audit_trails.id_karyawan DESC");

while($data = mysqli_fetch_array($result)) { 

$exporter->addRow(array($data['waktu'], $data['content'], $data['nama_karyawan']));

}
$exporter->finalize(); // writes the footer, flushes remaining data to browser.

exit(); // all done

?>