<?php
// Get id from URL to delete that user
$id_rab = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM rab WHERE id_rab='$id_rab'");
$result = mysqli_query($koneksi, "DELETE FROM rab_detail WHERE id_rab='$id_rab'");
 
?>
<script>
alert("Data RAB Berhasil Dihapus");
location="?page=rab_index";
</script>