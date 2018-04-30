<?php
// Get id from URL to delete that user
$id_rab = $_GET['id'];

		
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM rab WHERE id_rab='$id_rab'");
//audit trails
        date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'User Menghapus RAB'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')");
 
?>
<script>
alert("Data RAB Berhasil Dihapus");
location="?page=rab_indexuser";
</script>