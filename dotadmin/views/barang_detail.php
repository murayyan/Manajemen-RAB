<?php
// Display selected user data based on id
// Getting id from url
$id_barang = $_GET['id'];
// Fetech user data based on id
//$result = mysqli_query($koneksi, "SELECT * FROM Barang WHERE id_barang='$id_barang'");
//iner join
$result = mysqli_query($koneksi, "SELECT barang.*, kategori_barang.nama_kategoribarang, jenis_barang.nama_jenisbarang, lokasi.nama_lokasi FROM barang join kategori_barang on kategori_barang.id_kategoribarang = barang.id_kategoribarang join jenis_barang on jenis_barang.id_jenisbarang=barang.id_jenisbarang join lokasi on lokasi.id_lokasi=barang.id_lokasi WHERE id_barang='$id_barang'");

$data = mysqli_fetch_array($result);
//while($user_data = mysqli_fetch_array($result))
//{
//audit trails
        date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'Admin Mengunjungi Detail Barang'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')"); 
//	$nama_barang = $user_data['nama_barang'];
//	$id_lokasi = $user_data['id_lokasi'];
//}
?>
<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DETAIL DATA BARANG</b>
        </div>
    <div class="panel-body">
        <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
                <b>Kode Barang </b> <span class="pull-right"><?php echo $data['id_barang']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Nama</b> <span class="pull-right"><?php echo $data['nama_barang']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Kategori</b> <span class="pull-right"><?php echo $data['nama_kategoribarang']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Jenis</b> <span class="pull-right"><?php echo $data['nama_jenisbarang']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Jumlah</b> <span class="pull-right"><?php echo $data['jumlah_barang']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Merek</b> <span class="pull-right"><?php echo $data['merk_barang']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Type</b> <span class="pull-right"><?php echo $data['type_barang']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Warna</b> <span class="pull-right"><?php echo $data['warna_barang']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Kondisi</b> <span class="pull-right"><?php echo $data['kondisi_barang']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Lokasi</b> <span class="pull-right"><?php echo $data['nama_lokasi']; ?></span>
            </li>
             <li class="list-group-item">
                <b>Foto Barang</b> <span class="pull-right"><a href="images/<?php echo $data['foto_barang']; ?>" target="blank"><?php echo $data['foto_barang']; ?></a></span>
            </li>
            <li class="list-group-item">
                <b>Tanggal Masuk</b> <span class="pull-right"><?php echo $data['tgl_beli']; ?></span>
            </li>
            
            <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a>
        </ul>
    </div>
	</div>
</div>