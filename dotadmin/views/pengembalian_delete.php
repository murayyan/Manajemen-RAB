<?php
// Get id from URL to delete that user
$id_pengembalian = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM pengembalian WHERE id_pengembalian='$id_pengembalian'");
 
?>
<script>
alert("Data Pengembalian Berhasil Dihapus");
location="?page=pengembalian_index";
</script>