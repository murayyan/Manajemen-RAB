<?php
// Display selected user data based on id
// Getting id from url
$id_barangkeluar = $_GET['id'];
// Fetech user data based on id
//$result = mysqli_query($koneksi, "SELECT * FROM barang_keluar WHERE id_barangkeluar='$id_barangkeluar'");
//iner join
 $result = mysqli_query($koneksi, "SELECT barang_keluar.*, barang.nama_barang, lokasi.nama_lokasi FROM barang_keluar join barang on barang_keluar.id_barang = barang.id_barang join lokasi on barang_keluar.id_lokasi=lokasi.id_lokasi WHERE id_barangkeluar ='$id_barangkeluar' ");

$data = mysqli_fetch_array($result);

//while($user_data = mysqli_fetch_array($result))
//{
//	$nama_barang = $user_data['nama_barang'];
//	$id_lokasi = $user_data['id_lokasi'];
//}
?>
<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DETAIL BARANG KELUAR</b>
        </div>
    <div class="panel-body">
        <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
                <b>Kode Barang Keluar</b> <span class="pull-right"><?php echo $data['id_barangkeluar']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Nama Barang</b> <span class="pull-right"><?php echo $data['nama_barang']; ?></span>
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
                <b>Lokasi Barang</b> <span class="pull-right"><?php echo $data['nama_lokasi']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Tanggal Keluar</b> <span class="pull-right"><?php echo $data['tgl_keluar']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Keterangan</b> <span class="pull-right"><?php echo $data['keterangan']; ?></span>
            </li>
            
            
            <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a>
        </ul>
    </div>
	</div>
</div>