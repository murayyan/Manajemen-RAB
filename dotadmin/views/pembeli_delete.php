<?php
// Get id from URL to delete that user
$id_pembeli = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM pembeli WHERE id_pembeli='$id_pembeli'");
 //audit trails
        date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'Admin Menghapus Data Pembeli'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')"); 
?>
<script>
alert("Data Pembeli Berhasil Dihapus");
location="?page=pembeli_index";
</script>