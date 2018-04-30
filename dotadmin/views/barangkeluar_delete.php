<?php
// Get id from URL to delete that user
$id_barangkeluar = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM barang_keluar WHERE id_barangkeluar='$id_barangkeluar'");
 
?>
<script>
alert("Data Barang Keluar Berhasil Dihapus");
location="?page=barangkeluar_index";
</script>