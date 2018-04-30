<?php
// Display selected user data based on id
// Getting id from url
$id_pengembalian = $_GET['id'];
// Fetech user data based on id
//$result = mysqli_query($koneksi, "SELECT * FROM pengembalian WHERE id_pengembalian='$id_pengembalian'");
//iner join
 $result = mysqli_query($koneksi, "SELECT pengembalian.*, karyawan.nama_karyawan, barang.nama_barang, lokasi.nama_lokasi FROM pengembalian join karyawan on karyawan.id_karyawan=pengembalian.id_karyawan join barang on barang.id_barang=pengembalian.id_barang join lokasi on lokasi.id_lokasi=pengembalian.id_lokasi WHERE id_pengembalian = '$id_pengembalian' ");


$data = mysqli_fetch_array($result);

//audit trails
        date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'User Mengunjungi Detail Data Pengembalian'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')"); 

//while($user_data = mysqli_fetch_array($result))
//{
//	$nama_barang = $user_data['nama_barang'];
//	$id_lokasi = $user_data['id_lokasi'];
//}
?>
<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DETAIL PENGEMBALIAN</b>
        </div>
    <div class="panel-body">
        <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
                <b>Kode Pengembalian</b> <span class="pull-right"><?php echo $data['id_pengembalian']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Kode Peminjaman</b> <span class="pull-right"><?php echo $data['id_peminjaman']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Nama Karyawan</b> <span class="pull-right"><?php echo $data['nama_karyawan']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Nama Barang</b> <span class="pull-right"><?php echo $data['nama_barang']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Tanggal Pengembalian</b> <span class="pull-right"><?php echo $data['tgl_pengembalian']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Jumlah</b> <span class="pull-right"><?php echo $data['qty_pengembalian']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Kondisi Barang</b> <span class="pull-right"><?php echo $data['kondisi_barang']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Lokasi Barang</b> <span class="pull-right"><?php echo $data['nama_lokasi']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Merek </b> <span class="pull-right"><?php echo $data['merk_barang']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Type </b> <span class="pull-right"><?php echo $data['type_barang']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Warna</b> <span class="pull-right"><?php echo $data['warna_barang']; ?></span>
            </li>
            
            
            <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a>
        </ul>
    </div>
	</div>
</div>