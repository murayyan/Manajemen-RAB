<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "tugasakhir";
 
// $koneksi= mysqli_connect($host, $user, $pass, $db_name);

$koneksi = mysqli_connect($host,$user,$pass) or die(mysql_error());
mysqli_select_db($koneksi,$db_name);
?>