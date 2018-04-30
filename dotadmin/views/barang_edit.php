<?php
// include database connection file
//include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit']))
{   
    $id_barang=$_POST['id_barang'];

    $nama_barang=$_POST['nama_barang'];
    $id_kategoribarang=$_POST['id_kategoribarang'];
    $id_jenisbarang=$_POST['id_jenisbarang'];
    $jumlah_barang=$_POST['jumlah_barang'];
    $merk_barang=$_POST['merk_barang'];
    $type_barang=$_POST['type_barang'];
    $warna_barang=$_POST['warna_barang'];
    $kondisi_barang=$_POST['kondisi_barang'];
    $id_lokasi=$_POST['id_lokasi'];

     if( isset($_FILES['foto_barang'])){
        $nama  = $_FILES['foto_barang']['name'];
        $file_tmp   = $_FILES['foto_barang']['tmp_name'];  
        $upload     = move_uploaded_file($file_tmp, 'images/'.$nama);
    }else{
        $nama = $_POST['old_foto_barang'];
    }
    $tgl_beli=$_POST['tgl_beli'];
    //$create_at=$_POST['create_at'];
    
        
    // update user data
    $result = mysqli_query($koneksi, "UPDATE barang SET nama_barang='$nama_barang',id_kategoribarang='$id_kategoribarang',id_jenisbarang='$id_jenisbarang',jumlah_barang='$jumlah_barang',merk_barang='$merk_barang',type_barang='$type_barang',warna_barang='$warna_barang',kondisi_barang='$kondisi_barang',id_lokasi='$id_lokasi' ,foto_barang='$nama', tgl_beli='$tgl_beli' WHERE id_barang='$id_barang'");
  // var_dump($result);
  // die();
   // echo "<pre>";
   //  print_r($path);
   //  die();
     date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'Admin Mengedit Barang'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')"); 

    ?>
    
    <script>
                alert("Data Barang Berhasil Diperbarui ");
                location="?page=barang_index";
            </script>

    <?php
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_barang = $_GET['id'];
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT barang.*, kategori_barang.nama_kategoribarang, jenis_barang.nama_jenisbarang, lokasi.nama_lokasi FROM barang join kategori_barang on kategori_barang.id_kategoribarang = barang.id_kategoribarang join jenis_barang on jenis_barang.id_jenisbarang=barang.id_jenisbarang join lokasi on lokasi.id_lokasi=barang.id_lokasi WHERE id_barang='$id_barang'");

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
           <b>DATA BARANG</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="old_foto_barang" value="<?php echo $data['foto_barang']; ?>">
        <input type="hidden" name="id_barang" value="<?php echo $data['id_barang']; ?>">
                    <div class="form-group">
                        <label>Kode Barang</label>
                        <input class="form-control" type="text" name="id_barang" readonly="readonly" value="<?php echo $data['id_barang']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input class="form-control" type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>">
                    </div>


                     <div class="form-group">
                        <label>Kategori</label>
                    <select class="form-control" name="id_kategoribarang">
                        <?php
                                     
                        // Fetch all karyawan data from database
                        $result = mysqli_query($koneksi, "SELECT * FROM kategori_barang ORDER BY nama_kategoribarang ASC");
                          
                            while($data_kategoribarang = mysqli_fetch_array($result)) {   
                        ?>
                            <option value="<?php echo $data_kategoribarang['id_kategoribarang']; ?>" <?php if ($data['nama_barang'] == $data_kategoribarang['id_kategoribarang']) echo 'selected'; ?>><?php echo $data_kategoribarang['nama_kategoribarang']; ?></option>
                        <?php } ?>
                        </select>
                    </div>


                     <div class="form-group">
                        <label>Jenis</label>
                    <select class="form-control" name="id_jenisbarang">
                        <?php
                                     
                        // Fetch all karyawan data from database
                        $result = mysqli_query($koneksi, "SELECT * FROM jenis_barang ORDER BY nama_jenisbarang ASC");
                          
                            while($data_jenisbarang = mysqli_fetch_array($result)) {   
                        ?>
                            <option value="<?php echo $data_jenisbarang['id_jenisbarang']; ?>" <?php if ($data['id_jenisbarang'] == $data_jenisbarang['id_jenisbarang']) echo 'selected'; ?>><?php echo $data_jenisbarang['nama_jenisbarang']; ?></option>
                        <?php } ?>
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Jumlah</label>
                        <input class="form-control" type="text" name="jumlah_barang" value="<?php echo $data['jumlah_barang']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Merek</label>
                        <input class="form-control" type="text" name="merk_barang" value="<?php echo $data['merk_barang']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Type</label>
                        <input class="form-control" type="text" name="type_barang" value="<?php echo $data['type_barang']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Warna</label>
                        <input class="form-control" type="text" name="warna_barang" value="<?php echo $data['warna_barang']; ?>">
                    </div>


                    <div class="form-group">
                        <label>Lokasi</label>
                    <select class="form-control" name="id_lokasi">
                        <?php
                                     
                        // Fetch all karyawan data from database
                        $result = mysqli_query($koneksi, "SELECT * FROM lokasi ORDER BY nama_lokasi ASC");
                          
                            while($data_lokasi = mysqli_fetch_array($result)) {   
                        ?>
                            <option value="<?php echo $data_lokasi['id_lokasi']; ?>" <?php if ($data['id_lokasi'] == $data_lokasi['id_lokasi']) echo 'selected'; ?>><?php echo $data_lokasi['nama_lokasi']; ?></option>
                        <?php } ?>
                        </select>
                    </div>

                    
                    <div class="form-group">
                        <label>Kondisi</label>
                        <select class="form-control" name="kondisi_barang">
                        <option value="Baik" <?php if ($data['kondisi_barang'] == 'Baik') echo 'selected'; ?> >Baik</option>
                            <option value="Rusak" <?php if ($data['kondisi_barang'] == 'Rusak') echo 'selected'; ?>>Rusak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Foto Barang</label>
                        Old Attachment : <a href="images/<?php echo $data['foto_barang']; ?>" target="_blank"><?php echo $data['foto_barang']; ?></a>
                        <input name="foto_barang" type="file" />
                    </div>
                    <div class="form-group">
                        <label>Tanggal Beli</label>
                        <input class="form-control datepicker" type="text" name="tgl_beli" value="<?php echo $data['tgl_beli']; ?>">
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-info">Save </button>
                    <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a> 
                </form>
        </div>
    </div>
</div>
</section>