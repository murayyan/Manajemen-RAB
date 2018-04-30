<?php
// include database connection file
//include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit']))
{   
        $id_rab = $_GET['id'];
        $nama_rab = $_POST['nama_rab'];
        $id_proyek = $_POST['id_proyek'];
        $id_karyawan = $_SESSION['id_karyawan'];
        
       if( isset($_FILES['attachment'])){
        $nama       = $_FILES['attachment']['name'];
        $file_tmp   = $_FILES['attachment']['tmp_name'];  
        $upload     = move_uploaded_file($file_tmp, 'images/'.$nama);
    }else{
        $nama = $_POST['old_attachment'];
    }

        $periode = $_POST['periode'];
        $keterangan = $_POST['keterangan'];

	// update user data
	 $result = mysqli_query($koneksi, "UPDATE rab SET nama_rab='$nama_rab',id_proyek='$id_proyek',id_karyawan='id_karyawan',attachment='$uploaddokumen',periode='$periode',keterangan='$keterangan' WHERE id_rab='$id_rab'");

        //audit trails
        date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'User Mengubah Data RAB'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')");
    
	?>
	
	<script>
                alert("Data RAB Berhasil Diperbarui ");
                location="?page=rab_indexuser";
            </script>

	<?php
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_rab = $_GET['id'];
// Fetech user data based on id
//$result = mysqli_query($koneksi, "SELECT * FROM perizinan WHERE id_karyawan='$id_karyawan'");
$result = mysqli_query($koneksi, "SELECT rab.*, proyek.nama_proyek, karyawan.nama_karyawan FROM rab join proyek on proyek.id_proyek=rab.id_proyek join karyawan on karyawan.id_karyawan=rab.id_karyawan  WHERE id_rab = '$id_rab' ");

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
           <b>DATA RAB</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST" enctype="multipart/form-data">
         <input type="hidden" name="old_attachment" value="<?php echo $data['attachment']; ?>">
        <input type="hidden" name="id" value="<?php echo $data['id_rab']; ?>"> 
                    <div class="form-group">
                        <label>ID RAB</label>
                        <input class="form-control" type="text" readonly="readonly" name="id_rab" value="<?php echo $data['id_rab']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama RAB</label>
                        <input class="form-control" type="text" name="nama_rab" value="<?php echo $data['nama_rab']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Proyek</label>
                        <select class="form-control" name="id_proyek">
                        <?php
                        $result = mysqli_query($koneksi, "SELECT * FROM proyek ORDER BY nama_proyek ASC");
                          
                            while($datarab = mysqli_fetch_array($result)) {   
                        ?>
                        <option value="<?php echo $datarab['id_proyek']; ?>" <?php echo ( $datarab['id_proyek'] == $data['id_proyek']) ? 'selected' : ''; ?>><?php echo $datarab['nama_proyek']; ?></option>
                        <?php } ?>
                        </select>
                    </div>
                   
                     <div class="form-group">
                        <label>Attachment</label>
                        Old Attachment : <a href="images/<?php echo $data['attachment']; ?>" target="blank"><?php echo $data['attachment']; ?></a>
                        <input name="attachment" type="file" />
                    </div>
                    <div class="form-group">
                        <label>Periode</label>
                        <input class="form-control datepicker" type="text" name="periode" value="<?php echo $data['periode']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input class="form-control" type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>">
                    </div>
            
                    <button type="submit" name="submit" class="btn btn-info">Save </button>
                    <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a> 
                </form>
        </div>
    </div>
</div>
</section>