<?php
// include database connection file
//include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit']))
{	
	$id = $_POST['id'];
	
	$id_kategori=$_POST['id_kategori'];
	$tanggal_pengajuan=$_POST['tanggal_pengajuan'];
	$tanggal_mulai=$_POST['tanggal_mulai'];
	$tanggal_selesai=$_POST['tanggal_selesai'];
	$lama=$_POST['lama'];
	$keterangan=$_POST['keterangan'];
	//$attachment=$_POST['attachment'];
	
    if( isset($_FILES['attachment'])){
        $nama       = $_FILES['attachment']['name'];
        $file_tmp   = $_FILES['attachment']['tmp_name'];  
        $upload     = move_uploaded_file($file_tmp, 'images/'.$nama);
    }else{
        $nama = $_POST['old_attachment'];
    }

	// update user data
	$result = mysqli_query($koneksi, "UPDATE perizinan SET id_kategori='$id_kategori',tanggal_pengajuan='$tanggal_pengajuan',tanggal_mulai='$tanggal_mulai',tanggal_selesai='$tanggal_selesai',lama='$lama',keterangan='$keterangan',attachment='$nama' WHERE idp='$id'");

        //audit trails
        date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'User Mengubah Data Perizinan'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')");
    
	?>
	
	<script>
  				alert("Data Perizinan Berhasil Diperbarui ");
  				location="?page=perizinan_karyawan";
  			</script>

	<?php
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
// Fetech user data based on id
//$result = mysqli_query($koneksi, "SELECT * FROM perizinan WHERE id_karyawan='$id_karyawan'");
$result = mysqli_query($koneksi, "SELECT perizinan.*, karyawan.nama_karyawan, kategori_perizinan.kategori FROM perizinan join karyawan on perizinan.id_karyawan=karyawan.id_karyawan join kategori_perizinan on kategori_perizinan.id_kategori=perizinan.id_kategori WHERE perizinan.idp='$id' ORDER BY perizinan.id_karyawan DESC");

$data = mysqli_fetch_array($result);
//while($user_data = mysqli_fetch_array($result))
//{
//	$nama_karyawan = $user_data['nama_karyawan'];
//	$tempat_lahir = $user_data['tempat_lahir'];
//}
?>

<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA PERIZINAN</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="old_attachment" value="<?php echo $data['attachment']; ?>">
        <input type="hidden" name="id" value="<?php echo $data['idp']; ?>">
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="id_kategori">
                        <?php
                        $result = mysqli_query($koneksi, "SELECT * FROM kategori_perizinan ORDER BY kategori ASC");
                          
                            while($kategori = mysqli_fetch_array($result)) {   
                        ?>
                        <option value="<?php echo $kategori['id_kategori']; ?>" <?php echo ( $kategori['id_kategori'] == $data['id_kategori']) ? 'selected' : ''; ?>><?php echo $kategori['kategori']; ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pengajuan</label>
                        <input class="form-control datepicker" type="text" name="tanggal_pengajuan" value="<?php echo $data['tanggal_pengajuan']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input class="form-control datepicker" type="text" name="tanggal_mulai" value="<?php echo $data['tanggal_mulai']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Selesai</label>
                        <input class="form-control datepicker" type="text" name="tanggal_selesai" value="<?php echo $data['tanggal_selesai']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Lama</label>
                        <input class="form-control" type="text" name="lama" value="<?php echo $data['lama']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input class="form-control" type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Attachment</label>
                        Old Attachment : <a href="images/<?php echo $data['attachment']; ?>" target="blank"><?php echo $data['attachment']; ?></a>
                        <input name="attachment" type="file" />
                    </div>
            
                    <button type="submit" name="submit" class="btn btn-info">Save </button>
                    <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a> 
                </form>
        </div>
    </div>
</div>
</section>