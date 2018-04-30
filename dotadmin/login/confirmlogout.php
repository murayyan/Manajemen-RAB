<?php
include_once("config.php"); 
session_start();
session_destroy();

date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'Logout'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')");
echo "<script>
   window.location='../login/index.php'; 
</script>";  

?>
