<?php  
	include 'config.php';
	$sql = "DELETE FROM rab_detail WHERE id_det = '".$_POST["id"]."'";  
	if(mysqli_query($koneksi, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>