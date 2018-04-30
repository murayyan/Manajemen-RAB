<!DOCTYPE html>
<html>
	<head>
		<title>We Are Sentimental Engineers</title>
		<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="submit" name="upload" value="Upload">
	</form>
	</head>
	<body>
	<h1>We Are Sentimental Engineers</h1>
		<?php 
		// include 'koneksi.php';
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg','pdf','doc');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					$upload = move_uploaded_file($file_tmp, 'images/'.$nama);
					var_dump( $upload );
					die();
					// $query = mysql_query("INSERT INTO upload VALUES(NULL, '$nama')");
					// if($query){
					// 	echo 'FILE BERHASIL DI UPLOAD';
					// }else{
					// 	echo 'GAGAL MENGUPLOAD GAMBAR';
					// }
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
		}
		?>

		<br/>
		<br/>
		<a href="index.php">Upload Lagi</a>
		<br/>
		<br/>
	</body>
</html>