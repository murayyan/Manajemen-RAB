<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "tugasakhir";
 
// $koneksi= mysqli_connect($host, $user, $pass, $db_name);

$koneksi = mysqli_connect($host,$user,$pass) or die(mysql_error());
mysqli_select_db($koneksi,$db_name);

$id = $_GET['id_det'];

$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM rab_detail where id_det='$id'"));
$data_nominal = array('nominal'   	=>  $data['nominal']);
 echo json_encode($data_nominal);
?>