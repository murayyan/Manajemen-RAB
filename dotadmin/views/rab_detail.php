<?php
// Display selected user data based on id
// Getting id from url
$id_rab = $_GET['id'];
// Fetech user data based on id
//$result = mysqli_query($koneksi, "SELECT * FROM rab WHERE id_rab='$id_rab'");
//iner join
$result = mysqli_query($koneksi, "SELECT rab.*, proyek.nama_proyek, karyawan.nama_karyawan FROM rab join proyek on proyek.id_proyek=rab.id_proyek join karyawan on karyawan.id_karyawan=rab.id_karyawan  WHERE id_rab = '$id_rab' ");

$detail_angg = mysqli_query($koneksi, "SELECT nama_anggaran, nominal, status FROM rab_detail WHERE id_rab = '$id_rab'");

$data = mysqli_fetch_array($result);
$jml = 0;
//while($user_data = mysqli_fetch_array($result))
//{
//	$nama_barang = $user_data['nama_barang'];
//	$id_lokasi = $user_data['id_lokasi'];
//}
?>
<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DETAIL RAB</b>
        </div>
    <div class="panel-body">
        <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
                <b>ID  RAB </b> <span class="pull-right"><?php echo $data['id_rab']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Nama Proyek</b> <span class="pull-right"><?php echo $data['nama_proyek']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Nama Project Manager</b> <span class="pull-right"><?php echo $data['nama_karyawan']; ?></span>
            </li>
             <li class="list-group-item">
                <b>Attachment</b> 
                <span class="pull-right"><a href="download.php?page=<?php echo $data['attachment']; ?>" target="blank"><?php echo $data['attachment']; ?></a></span>
            </li>
            
            <li class="list-group-item">
                <b>Periode</b> <span class="pull-right"><?php echo $data['periode']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Keterangan</b> <?php if($data['keterangan']=="Disetujui"){
                                                echo "<span class='pull-right' >Disetujui</span>";
                                            }else{
                                                 echo "<span class='pull-right'>Belum Disetujui</span>";
                                            } ?>
            </li>
            <li class="list-group-item">
                <center><h4><b>Detail Anggaran</b></h4></center>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field">
                            <tr>
                                <td><b>Nama Anggaran</b></td>
                                <td><b>Nominal</b></td>
                                <td><b>Status</b></td>
                                
                            </tr>
                            <?php 
                            while($data2 = mysqli_fetch_array($detail_angg)) { 

                             ?>
                            <tr>
                                <td><?php echo $data2['nama_anggaran']; ?></td>
                                <td>Rp <?php echo rp($data2['nominal']); ?></td>
                                 <td>
                                <?php if($data2['status']=="Disetujui"){
                                                echo "<span>Disetujui</span>";

                                            }else if($data2['status']=="Tidak Disetujui"){
                                                echo "<span>Tidak Disetujui</span>";
                                            }else{
                                                 echo "<span>Belum Disetujui</span>";
                                            } ?></td>
                                
                            </tr>
                            <?php 
                            $jml += $data2['nominal'];
                            } ?>
                            <tr>
                                <td><b>Jumlah</b></td>
                                <td><b>Rp <?php echo rp($jml); ?></b></td>
                                <td></td>
                            </tr>
                            
                        </table>
                        
            </li>
            
            <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a>
        </ul>
    </div>
	</div>
</div>

<?php 

function rp($angka){    
    $angka = number_format($angka); $angka = str_replace(',', '.', $angka); 
    $angka ="$angka";   
    return $angka;
} ?>