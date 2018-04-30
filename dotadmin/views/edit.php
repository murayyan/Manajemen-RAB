<?php  
	include 'config.php';
	$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE rab_detail SET ".$column_name."='".$text."' WHERE id_det='".$id."'";  
	if(mysqli_query($koneksi, $sql))  
	{  
		echo 'Data Updated';  
	}  
 ?>