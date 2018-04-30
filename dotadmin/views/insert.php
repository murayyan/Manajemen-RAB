<?php  
include 'config.php';
$sql = "INSERT INTO rab_detail(id_rab, nama_anggaran, nominal, status) VALUES('".$_POST["id"]."','".$_POST["anggaran"]."', '".$_POST["nominal"]."','Belum Disetujui')";  
if(mysqli_query($koneksi, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>