<?php
// Display selected user data based on id
// Getting id from url
$id_pengajuan = $_GET['id'];
// Fetech user data based on id
//$result = mysqli_query($koneksi, "SELECT * FROM pengajuan WHERE id_pengajuan='$id_pengajuan'");
//iner join
$result = mysqli_query($koneksi, "SELECT pengajuan.*, karyawan.nama_karyawan, jenis_pengajuan.nama_jenispengajuan, rab.nama_rab FROM pengajuan join karyawan on karyawan.id_karyawan=pengajuan.id_karyawan join jenis_pengajuan on jenis_pengajuan.id_jenispengajuan=pengajuan.id_jenispengajuan join rab on rab.id_rab=pengajuan.id_rab WHERE id_pengajuan ='$id_pengajuan'  ");


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
           <b>DETAIL PENGAJUAN</b>
        </div>
    <div class="panel-body">
        <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
                <b>Kode Pengajuan</b> <span class="pull-right"><?php echo $data['id_pengajuan']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Nama Karyawan</b> <span class="pull-right"><?php echo $data['nama_karyawan']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Jenis Pengajuan</b> <span class="pull-right"><?php echo $data['nama_jenispengajuan']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Nama Pengajuan</b> <span class="pull-right"><?php echo $data['nama_pengajuan']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Biaya</b> <span class="pull-right"><?php echo $data['biaya']; ?></span>
            </li>
            <!-- <li class="list-group-item">
                <b>Foto Pengajuan</b> <span class="pull-right"><a href="images/<?php //echo $data['foto_pengajuan']; ?>" target="blank"><?php //echo $data['//foto_pengajuan']; ?></a></span> -->
             <li class="list-group-item">
                <b>Link</b> <span class="pull-down"><a href="<?php echo $data['foto_pengajuan'];?>" target="_blank"><br><?php echo $data['foto_pengajuan']; ?></a></span>
            </li>
            </li>
            <li class="list-group-item">
                <b>Alasan</b> <span class="pull-right"><?php echo $data['alasan']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Tanggal Pengajuan</b> <span class="pull-right"><?php echo $data['tgl_pengajuan']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Status Pengajuan </b> <span class="pull-right"><?php echo $data['status_pengajuan']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Kode RAB</b> <span class="pull-right"><?php echo $data['nama_rab']; ?></span>
            </li>
            
            
            <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a>
        </ul>
    </div>
	</div>
</div>