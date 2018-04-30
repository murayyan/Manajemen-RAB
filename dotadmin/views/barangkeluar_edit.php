<?php
// include database connection file
//include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit']))
{   
    $id_barangkeluar = $_POST['id_barangkeluar'];
    $id_barang = $_POST['id_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $merk_barang = $_POST['merk_barang'];
    $type_barang = $_POST['type_barang'];
    $warna_barang = $_POST['warna_barang'];
    $kondisi_barang = $_POST['kondisi_barang'];
    $id_lokasi = $_POST['id_lokasi'];
    $tgl_keluar = $_POST['tgl_keluar'];
    $keterangan = $_POST['keterangan'];


        
        
    // update user data
    $result = mysqli_query($koneksi, "UPDATE barang_keluar SET id_barang='$id_barang',jumlah_barang='$jumlah_barang',merk_barang='$merk_barang',type_barang='$type_barang',warna_barang='$warna_barang',kondisi_barang='$kondisi_barang',id_lokasi='$id_lokasi',tgl_keluar='$tgl_keluar',keterangan='$keterangan' WHERE id_barangkeluar='$id_barangkeluar'");
    ?>
    
    <script>
                alert("Data Barang Keluar Berhasil Diperbarui ");
                location="?page=barangkeluar_index";
            </script>
    <?php
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_barangkeluar = $_GET['id'];
// Fetech user data based on id
//$result = mysqli_query($koneksi, "SELECT * FROM absensi WHERE id_karyawan='$id_karyawan'");
$result = mysqli_query($koneksi, "SELECT * FROM barang_keluar WHERE id_barangkeluar='$id_barangkeluar'");

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
           <b>DATA BARANG KELUAR</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST">
                    <div class="form-group">
                        <label>Kode Barang Keluar</label>
                        <input class="form-control" type="text" name="id_barangkeluar" readonly="readonly" value="<?php echo $data['id_barangkeluar']; ?>">
                    </div>


                    <div class="form-group">
                        <label>Nama Barang</label>
                        <select class="form-control" name="id_barang">
                        <?php
                                     
                        // Fetch all karyawan data from database
                        $result = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY nama_barang ASC");
                          
                            while($data_barang = mysqli_fetch_array($result)) {   
                        ?>
                             <option value="<?php echo $data_barang['id_barang']; ?>" <?php if ($data['id_barang'] == $data_barang['id_barang']) echo 'selected'; ?>><?php echo $data_barang['nama_barang']; ?></option>
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
                        <label>Kondisi Barang</label>
                        <input class="form-control" type="text" name="kondisi_barang" value="<?php echo $data['kondisi_barang']; ?>">
                    </div>


                    <div class="form-group">
                        <label>Lokasi Barang</label>
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
                        <label>Tanggal Keluar</label>
                        <input class="form-control datepicker" type="text" name="tgl_keluar" value="<?php echo $data['tgl_keluar']; ?>">
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