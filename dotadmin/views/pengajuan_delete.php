<?php
// Get id from URL to delete that user
$id_pengajuan = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM pengajuan WHERE id_pengajuan='$id_pengajuan'");
 
?>
<script>
alert("pengajuan Dihapus");
location="?page=pengajuan_manager";
</script>