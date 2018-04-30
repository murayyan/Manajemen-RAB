<?php
// Display selected user data based on id
// Getting id from url
$id_rab = $_GET['id'];
// Fetech user data based on id
//$result = mysqli_query($koneksi, "SELECT * FROM rab WHERE id_rab='$id_rab'");
//iner join
$result = mysqli_query($koneksi, "SELECT rab.*, proyek.nama_proyek, karyawan.nama_karyawan FROM rab join proyek on proyek.id_proyek=rab.id_proyek join karyawan on karyawan.id_karyawan=rab.id_karyawan  WHERE id_rab = '$id_rab' ");


$data = mysqli_fetch_array($result);
//while($user_data = mysqli_fetch_array($result))
//{
//  $nama_barang = $user_data['nama_barang'];
//  $id_lokasi = $user_data['id_lokasi'];
//}
?>
<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DETAIL RAB</b>
        </div>
    <div class="panel-body">
        <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
                <b>Kode RAB </b> <span class="pull-right"><?php echo $data['id_rab']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Nama RAB</b> <span class="pull-right"><?php echo $data['nama_rab']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Nama Proyek</b> <span class="pull-right"><?php echo $data['nama_proyek']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Nama Karyawan</b> <span class="pull-right"><?php echo $data['nama_karyawan']; ?></span>
            </li>
             <li class="list-group-item">
                <b>Attachment</b> <span class="pull-right"><?php echo $data['attachment']; ?></span>
            </li>
            
            <li class="list-group-item">
                <b>Periode</b> <span class="pull-right"><?php echo $data['periode']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Keterangan</b> <span class="pull-right"><?php echo $data['keterangan']; ?></span>
            </li>
            
            
            <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a>
        </ul>
    </div>
    </div>
</div>