<?php
include "config.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
if (empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=.php'>";
}else if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}else{
session_start();
$login = mysqli_query($koneksi,"select * from karyawan where username='$username' and password='$password'");
if (mysqli_num_rows($login) > 0){
	$data=mysqli_fetch_array($login);
	$_SESSION['username'] 		= $username;
	$_SESSION['id_karyawan'] 	= $data['id_karyawan'];
	$_SESSION['nama_karyawan'] 	= $data['nama_karyawan'];
	$_SESSION['email'] 			= $data['email'];
	$_SESSION['id_role'] 		= $data['id_role'];

	//audit trails
	date_default_timezone_set('Asia/Jakarta');
	$waktu 			= date('Y-m-d H:i:s');
	$content 		= 'Login'; 
	$id_karyawan 	= $data['id_karyawan'];


	mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')");

	if( $data['id_role'] == 'Role2' ) {
		 header("Location: /ta_richa12032018/dotadmin/index.php?page=dashboard_user");
	}else{
		header("Location: /ta_richa12032018/dotadmin/index.php");
	}
}else{
echo "<script>alert('Username atau Password salah')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}
}
?>