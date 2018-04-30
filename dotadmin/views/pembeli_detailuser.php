<?php
// Display selected user data based on id
// Getting id from url
$id_pembeli = $_GET['id'];
// Fetech user data based on id
//$result = mysqli_query($koneksi, "SELECT * FROM Barang WHERE id_barang='$id_barang'");
//iner join
$result = mysqli_query($koneksi, "SELECT pembeli.*, pengajuan.nama_pengajuan, karyawan.nama_karyawan FROM pembeli join pengajuan on pengajuan.id_pengajuan = pembeli.id_pengajuan join karyawan on karyawan.id_karyawan=pembeli.id_karyawan WHERE id_pembeli='$id_pembeli' ");

//$result = mysqli_query($koneksi, "SELECT barang.*, kategori_barang.nama_kategoribarang, jenis_barang.nama_jenisbarang, lokasi.nama_lokasi FROM barang join kategori_barang on kategori_barang.id_kategoribarang = barang.id_kategoribarang join jenis_barang on jenis_barang.id_jenisbarang=barang.id_jenisbarang join lokasi on lokasi.id_lokasi=barang.id_lokasi WHERE id_barang='$id_barang'");

$data = mysqli_fetch_array($result);
//while($user_data = mysqli_fetch_array($result))
//{
//audit trails
        date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'User Mengunjungi Detail Data Pembeli'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')"); 
//	$nama_barang = $user_data['nama_barang'];
//	$id_lokasi = $user_data['id_lokasi'];
//}
?>
<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DETAIL DATA PEMBELI</b>
        </div>
    <div class="panel-body">
        <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
                <b>Kode Pembeli </b> <span class="pull-right"><?php echo $data['id_pembeli']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Nama Pengajuan</b> <span class="pull-right"><?php echo $data['nama_pengajuan']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Nama Karyawan</b> <span class="pull-right"><?php echo $data['nama_karyawan']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Tanggal Beli</b> <span class="pull-right"><?php echo $data['tgl_beli']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Anggaran</b> <span class="pull-right"><?php echo $data['anggaran']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Bukti Pembelian</b> <span class="pull-right"><a href="images/<?php echo $data['attachment']; ?>" target="blank"><?php echo $data['attachment']; ?></a></span>
            </li>

            
            
            <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a>
        </ul>
    </div>
	</div>
</div>