<?php
// include database connection file
//include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit']))
{   
    $id_peminjaman = $_POST['id_peminjaman'];
    $id_karyawan=$_POST['id_karyawan'];
    $tgl_peminjaman=$_POST['tgl_peminjaman'];
    $id_barang=$_POST['id_barang'];
    $qty_peminjaman=$_POST['qty_peminjaman'];
    $kondisi_barang=$_POST['kondisi_barang'];
    $merk_barang=$_POST['merk_barang'];
    $type_barang=$_POST['type_barang'];
    $warna_barang=$_POST['warna_barang'];
    $status=$_POST['status'];
   
    
        
    // update user data
    $result = mysqli_query($koneksi, "UPDATE peminjaman SET id_karyawan='$id_karyawan',tgl_peminjaman='$tgl_peminjaman',id_barang='$id_barang',qty_peminjaman='$qty_peminjaman',kondisi_barang='$kondisi_barang',merk_barang='$merk_barang',type_barang='$type_barang',warna_barang='$warna_barang' ,status='$status' WHERE id_peminjaman='$id_peminjaman'");

    //audit trails
     date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'Admin Mengedit Peminjaman'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')"); 

    ?>
    
    <script>
                alert("Data Peminjaman Berhasil Diperbarui ");
                location="?page=peminjaman_index";
            </script>

    <?php
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_peminjaman = $_GET['id'];
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id_peminjaman='$id_peminjaman'");

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
           <b>DATA PEMINJAMAN</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST">
                    <div class="form-group">
                        <label>Kode Peminjaman</label>
                        <input class="form-control" type="text" name="id_peminjaman" readonly="readonly" value="<?php echo $data['id_peminjaman']; ?>">
                    </div>


                    <div class="form-group">
                        <label>Nama Karyawan</label>
                        <select class="form-control" name="id_karyawan" readonly="readonly">
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
                        <label>Tanggal Peminjaman</label>
                        <input class="form-control datepicker" type="text" name="tgl_peminjaman" value="<?php echo $data['tgl_peminjaman']; ?>">
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
                        <input class="form-control" type="text" name="qty_peminjaman" value="<?php echo $data['qty_peminjaman']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Kondisi</label>
                        <input class="form-control" type="text" name="kondisi_barang" value="<?php echo $data['kondisi_barang']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Merk</label>
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
                        <label> Status peminjaman </label>
                        <select class="form-control" name="status">
                            <option value="Dipinjam" <?php if ($data['status'] == 'Dipinjam') echo 'selected'; ?> >Dipinjam</option>
                            <option value="Dikemblikan" <?php if ($data['status'] == 'Dikemblikan') echo 'selected'; ?> >Dikembalikan</option>
                        </select>
                        </div>
                    
                    <button type="submit" name="submit" class="btn btn-info">Save </button>
                    <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a> 
                </form>
        </div>
    </div>
</div>
</section>