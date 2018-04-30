<?php
include 'config.php';
// Get id from URL to delete that user
$id_det= $_GET['id_det'];

// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM rab_detail WHERE id_det='$id_det'");
 
?>