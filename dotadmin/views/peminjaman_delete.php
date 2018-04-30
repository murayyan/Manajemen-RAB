<?php
// Get id from URL to delete that user
$id_peminjaman = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM peminjaman WHERE id_peminjaman='$id_peminjaman'");
 //audit trails
        date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'Admin Menghapus Peminjaman'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')"); 
?>
<script>
alert("Data Peminjaman Berhasil Dihapus");
location="?page=peminjaman_index";
</script>