<?php
// include database connection file
//include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit']))
{   
    $id_pengembalian = $_POST['id_pengembalian'];
    $id_peminjaman=$_POST['id_peminjaman'];
    $id_karyawan=$_POST['id_karyawan'];
    $id_barang=$_POST['id_barang'];
    $tgl_pengembalian=$_POST['tgl_pengembalian'];
    $qty_pengembalian=$_POST['qty_pengembalian'];
    $kondisi_barang=$_POST['kondisi_barang'];
    $id_lokasi=$_POST['id_lokasi'];
    $merk_barang=$_POST['merk_barang'];
    $type_barang=$_POST['type_barang'];
    $warna_barang=$_POST['warna_barang'];
    
        
    // update user data
    $result = mysqli_query($koneksi, "UPDATE pengembalian SET id_peminjaman='$id_peminjaman',id_karyawan='$id_karyawan',id_barang='$id_barang',tgl_pengembalian='$tgl_pengembalian',qty_pengembalian='$qty_pengembalian',kondisi_barang='$kondisi_barang',id_lokasi='$id_lokasi',merk_barang='$merk_barang',type_barang='$type_barang', warna_barang='$warna_barang' WHERE id_pengembalian='$id_pengembalian'");
    ?>
    
    <script>
                alert("Data Pengembalian Berhasil Diperbarui ");
                location="?page=pengembalian_index";
            </script>

    <?php
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_pengembalian = $_GET['id'];
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM pengembalian WHERE id_pengembalian='$id_pengembalian'");

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
           <b>DATA PENGEMBALIAN</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST">
                    <div class="form-group">
                        <label>Kode Pengembalian</label>
                        <input class="form-control" type="text" readonly="readonly" name="id_pengembalian" value="<?php echo $data['id_pengembalian']; ?>">
                    </div>


                    <div class="form-group">
                        <label>Kode Peminjaman</label>
                       <select class="form-control" name="id_peminjaman">
                        <?php
                                     
                        // Fetch all karyawan data from database
                        $result = mysqli_query($koneksi, "SELECT * FROM peminjaman ORDER BY id_peminjaman ASC");
                          
                            while($data_peminjaman = mysqli_fetch_array($result)) {   
                        ?>
                             <option value="<?php echo $data_peminjaman['id_peminjaman']; ?>" <?php if ($data['id_peminjaman'] == $data_peminjaman['id_peminjaman']) echo 'selected'; ?>><?php echo $data_peminjaman['id_peminjaman']; ?></option>
                        <?php } ?>
                        </select>
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
                        <label>Tanggal Pengembalian</label>
                        <input class="form-control datepicker" type="text" name="tgl_pengembalian" value="<?php echo $data['tgl_pengembalian']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input class="form-control" type="text" name="qty_pengembalian" value="<?php echo $data['qty_pengembalian']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Kondisi Barang</label>
                        <input class="form-control" type="text" name="kondisi_barang" value="<?php echo $data['kondisi_barang']; ?>">
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
                    
                    <button type="submit" name="submit" class="btn btn-info">Save </button>
                    <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a> 
                </form>
        </div>
    </div>
</div>
</section>