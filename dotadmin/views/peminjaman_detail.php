<?php
// Display selected user data based on id
// Getting id from url
$id_peminjaman = $_GET['id'];
// Fetech user data based on id
//$result = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id_peminjaman='$id_peminjaman'");
//iner join ''
 $result = mysqli_query($koneksi, "SELECT peminjaman.*, karyawan.nama_karyawan, barang.nama_barang FROM peminjaman join karyawan on karyawan.id_karyawan=peminjaman.id_karyawan join barang on barang.id_barang=peminjaman.id_barang WHERE id_peminjaman = '$id_peminjaman' ");
                                      

$data = mysqli_fetch_array($result);
//while($user_data = mysqli_fetch_array($result))
//{
//audit trails
        date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'Admin Mengunjungi Detail Peminjaman'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')"); 
//	$nama_barang = $user_data['nama_barang'];
//	$id_lokasi = $user_data['id_lokasi'];
//}
?>
<div class="col-md-10 col-sm-10 col-xs-20">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DETAIL PEMINJAMAN</b>
        </div>
    <div class="panel-body">
        <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
                <b>Kode Peminjaman</b> <span class="pull-right"><?php echo $data['id_peminjaman']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Nama Karyawan</b> <span class="pull-right"><?php echo $data['nama_karyawan']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Tanggal Peminjaman</b> <span class="pull-right"><?php echo $data['tgl_peminjaman']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Nama Barang</b> <span class="pull-right"><?php echo $data['nama_barang']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Jumlah</b> <span class="pull-right"><?php echo $data['qty_peminjaman']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Kondisi</b> <span class="pull-right"><?php echo $data['kondisi_barang']; ?></span>
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
                <b>Status</b> <span class="pull-right"><?php echo $data['status']; ?></span>
            </li>
            
            <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a>
        </ul>
    </div>
	</div>
</div>