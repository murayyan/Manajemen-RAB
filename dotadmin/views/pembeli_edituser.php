<?php
// include database connection file
//include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit']))
{   
    $id_pembeli=$_POST['id_pembeli'];

    $id_pengajuan=$_POST['id_pengajuan'];
    $id_karyawan=$_SESSION['id_karyawan'];
    $tgl_beli=$_POST['tgl_beli'];
    $anggaran=$_POST['anggaran'];
   

     if( isset($_FILES['attachment'])){
        $uploadfoto       = $_FILES['attachment']['name'];
        $file_tmp         = $_FILES['attachment']['tmp_name'];  
        $upload           = move_uploaded_file($file_tmp, 'images/'.$uploadfoto);
    }else{
        $uploadfoto = $_POST['old_attachment'];
    }
    
    //$create_at=$_POST['create_at'];
   
        
    // update user data
    $result = mysqli_query($koneksi, "UPDATE pembeli SET id_pengajuan='$id_pengajuan',id_karyawan='$id_karyawan',tgl_beli='$tgl_beli',anggaran='$anggaran',attachment='$uploadfoto' WHERE id_pembeli='$id_pembeli'");
  // var_dump($result);
  // die();
   // echo "<pre>";
   //  print_r($path);
   //  die();
     date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'User Mengedit Data Pembeli'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')"); 

    ?>
    
    <script>
                alert("Data Pembeli Berhasil Diperbarui ");
                location="?page=pembeli_indexuser";
            </script>

    <?php
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_barang = $_GET['id'];
// Fetech user data based on id
//inner join
$result = mysqli_query($koneksi, "SELECT pembeli.*, pengajuan.nama_pengajuan, karyawan.nama_karyawan FROM pembeli join pengajuan on pengajuan.id_pengajuan = pembeli.id_pengajuan join karyawan on karyawan.id_karyawan=pembeli.id_karyawan  ");
//$result = mysqli_query($koneksi, "SELECT barang.*, kategori_barang.nama_kategoribarang, jenis_barang.nama_jenisbarang, lokasi.nama_lokasi FROM barang join kategori_barang on kategori_barang.id_kategoribarang = barang.id_kategoribarang join jenis_barang on jenis_barang.id_jenisbarang=barang.id_jenisbarang join lokasi on lokasi.id_lokasi=barang.id_lokasi WHERE id_barang='$id_barang'");

//audit trails

$data = mysqli_fetch_array($result);
//while($user_data = mysqli_fetch_array($result))
//{
//  $nama_karyawan = $user_data['nama_karyawan'];
//  $tempat_lahir = $user_data['tempat_lahir'];
//}

        
?>

<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA PEMBELI</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="old_foto_barang" value="<?php echo $data['attachment']; ?>">
         <input type="hidden" name="id_pembeli" value="<?php echo $data['id_pembeli']; ?>">
                    <div class="form-group">
                        <label>Kode Pembeli</label>
                        <input class="form-control" type="text" name="id_pembeli" readonly="readonly" value="<?php echo $data['id_pembeli']; ?>">
                    </div>

                     <div class="form-group">
                        <label>Nama Pengajuan</label>
                    <select class="form-control" name="id_pengajuan">
                        <?php
                                     
                        // Fetch all karyawan data from database
                        $result = mysqli_query($koneksi, "SELECT * FROM pengajuan ORDER BY nama_pengajuan ASC");
                          
                            while($data_pengajuan = mysqli_fetch_array($result)) {   
                        ?>
                            <option value="<?php echo $data_pengajuan['id_pengajuan']; ?>" <?php if ($data['nama_pengajuan'] == $data_pengajuan['id_pengajuan']) echo 'selected'; ?>><?php echo $data_pengajuan['nama_pengajuan']; ?></option>
                        <?php } ?>
                        </select>
                    </div>


                     

                    <div class="form-group">
                        <label>Tanggal Beli</label>
                        <input class="form-control datepicker" type="text" name="tgl_beli" value="<?php echo $data['tgl_beli']; ?>">
                    </div>


                    <div class="form-group">
                        <label>Anggaran</label>
                        <input class="form-control" type="text" name="anggaran" value="<?php echo $data['anggaran']; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label>Bukti Pembelian</label>
                        <a href="images/<?php echo $data['attachment']; ?>" target="blank"><?php echo $data['attachment']; ?></a>
                        <input name="attachment" type="file" />
                    </div>
                    
                    
                    <button type="submit" name="submit" class="btn btn-info">Save </button>
                    <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a> 
                </form>
        </div>
    </div>
</div>
</section>