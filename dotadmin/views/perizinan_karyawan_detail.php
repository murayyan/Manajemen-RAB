<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
// Fetech user data based on id
//$result = mysqli_query($koneksi, "SELECT * FROM perizinan WHERE id_karyawan='$id_karyawan'");

$result = mysqli_query($koneksi, "SELECT perizinan.*, karyawan.nama_karyawan, kategori_perizinan.kategori FROM perizinan join karyawan on perizinan.id_karyawan=karyawan.id_karyawan join kategori_perizinan on kategori_perizinan.id_kategori=perizinan.id_kategori WHERE perizinan.idp='$id' ORDER BY perizinan.id_karyawan DESC");

$data = mysqli_fetch_array($result);
//while($user_data = mysqli_fetch_array($result))
//{
//	$nama_karyawan = $user_data['nama_karyawan'];
//	$tempat_lahir = $user_data['tempat_lahir'];
//}
?>
<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA PERIZINAN</b>
        </div>
    <div class="panel-body">
        <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
                <b>Nama</b> <span class="pull-right"><?php echo $data['nama_karyawan']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Kategori</b> <span class="pull-right"><?php echo $data['kategori']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Tanggal Pengajuan</b> <span class="pull-right"><?php echo $data['tanggal_pengajuan']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Tanggal Mulai</b> <span class="pull-right"><?php echo $data['tanggal_mulai']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Tanggal Selesai</b> <span class="pull-right"><?php echo $data['tanggal_selesai']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Lama</b> <span class="pull-right"><?php echo $data['lama']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Keterangan</b> <span class="pull-right"><?php echo $data['keterangan']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Status</b> <span class="pull-right"><?php echo $data['status']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Attachment</b> <span class="pull-right"><a href="images/<?php echo $data['attachment']; ?>" target="blank"><?php echo $data['attachment']; ?></a></span>
            </li>
        </ul>

                <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a>
    </div>
	</div>
</div>