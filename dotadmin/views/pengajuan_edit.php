<?php
// include database connection file
//include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit']))
{	
	$id_pengajuan = $_GET['id'];
	$id_karyawan=$_POST['id_karyawan'];
	$id_jenispengajuan=$_POST['id_jenispengajuan'];
	$nama_pengajuan=$_POST['nama_pengajuan'];
	$biaya=$_POST['biaya'];
	$foto_pengajuan=$_POST['foto_pengajuan'];
	$alasan=$_POST['alasan'];
	$tgl_pengajuan=$_POST['tgl_pengajuan'];
	$status_pengajuan=$_POST['status_pengajuan'];
	$id_rab=$_POST['id_rab'];
	
		
	// update user data
	$result = mysqli_query($koneksi, "UPDATE pengajuan SET id_karyawan='$id_karyawan',id_jenispengajuan='$id_jenispengajuan',nama_pengajuan='$nama_pengajuan',biaya='$biaya',foto_pengajuan='$foto_pengajuan',alasan='$alasan',tgl_pengajuan='$tgl_pengajuan',status_pengajuan='$status_pengajuan',id_rab='$id_rab' WHERE id_pengajuan='$id_pengajuan'");
	?>
	
	<script>
  				alert("Data Pengajuan Berhasil Diperbarui ");
  				location="?page=pengajuan_index";
  			</script>

	<?php
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_pengajuan = $_GET['id'];
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM pengajuan WHERE id_pengajuan='$id_pengajuan'");

$data = mysqli_fetch_array($result);
//while($user_data = mysqli_fetch_array($result))
//{
//	$nama_karyawan = $user_data['nama_karyawan'];
//	$tempat_lahir = $user_data['tempat_lahir'];
//}
//audit trails
 date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'Admin Mengedit Pengajuan'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')"); 
?>

<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA RAB</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST">
                    <div class="form-group">
                        <label>Kode Pengajuan</label>
                        <input class="form-control" type="text" name="id_pengajuan" disabled="disabled" value="<?php echo $data['id_pengajuan']; ?>">
                    </div>


                    <div class="form-group">
                        <label>Nama Karyawan</label>
                        <select class="form-control" name="id_karyawan">
                        <?php
                                     
                        // Fetch all karyawan data from database
                        $result = mysqli_query($koneksi, "SELECT * FROM karyawan ORDER BY nama_karyawan ASC");
                          
                            while($data_karyawan = mysqli_fetch_array($result)) {   
                        ?>
                             <option value="<?php echo $data_karyawan['id_karyawan']; ?>" <?php if ($data['id_karyawan'] == $data_karyawan['id_karyawan']) echo 'selected'; ?>><?php echo $data_karyawan['nama_karyawan']; ?></option>
                        <?php } ?>
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Jenis Pengajuan</label>
                        <select class="form-control" name="id_jenispengajuan">
                        <?php
                                     
                        // Fetch all karyawan data from database
                        $result = mysqli_query($koneksi, "SELECT * FROM jenis_pengajuan ORDER BY nama_jenispengajuan ASC");
                          
                            while($data_jenispengajuan = mysqli_fetch_array($result)) {   
                        ?>
                             <option value="<?php echo $data_jenispengajuan['id_jenispengajuan']; ?>" <?php if ($data['id_jenispengajuan'] == $data_jenispengajuan['id_jenispengajuan']) echo 'selected'; ?>><?php echo $data_jenispengajuan['nama_jenispengajuan']; ?></option>
                        <?php } ?>
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Nama Pengajuan</label>
                        <input class="form-control" type="text" name="nama_pengajuan" value="<?php echo $data['nama_pengajuan']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Biaya</label>
                        <input class="form-control" type="text" name="biaya" value="<?php echo $data['biaya']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <input class="form-control" type="text" name="foto_pengajuan" value="<?php echo $data['foto_pengajuan']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Alasan</label>
                        <input class="form-control" type="text" name="alasan" value="<?php echo $data['alasan']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pengajuan</label>
                        <input class="form-control datepicker" type="text" name="tgl_pengajuan" value="<?php echo $data['tgl_pengajuan']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Status Pengajuan</label>
                        <select class="form-control" name="status_pengajuan">
                        <option value="Menunggu" <?php if ($data['status_pengajuan'] == 'Menunggu') echo 'selected'; ?> >Menunggu </option>
                        <option value="Diterima" <?php if ($data['status_pengajuan'] == 'Diterima') echo 'selected'; ?>>Diterima</option>
                        <option value="Ditolak" <?php if ($data['status_pengajuan'] == 'Ditolak') echo 'selected'; ?>>Ditolak</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Kode RAB</label>
                        <select class="form-control" name="id_rab">
                        <?php
                                     
                        // Fetch all karyawan data from database
                        $result = mysqli_query($koneksi, "SELECT * FROM rab ORDER BY nama_rab ASC");
                          
                            while($data_rab = mysqli_fetch_array($result)) {   
                        ?>
                             <option value="<?php echo $data_rab['id_rab']; ?>" <?php if ($data['id_rab'] == $data_rab['id_rab']) echo 'selected'; ?>><?php echo $data_rab['nama_rab']; ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    

                    <button type="submit" name="submit" class="btn btn-info">Save </button>
                    <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a> 
                </form>
        </div>
    </div>
</div>
</section>