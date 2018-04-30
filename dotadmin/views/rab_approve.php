<?php 
$id_rab = $_GET['id'];
// Fetech user data based on id
//$result = mysqli_query($koneksi, "SELECT * FROM rab WHERE id_rab='$id_rab'");
//iner join
$result = mysqli_query($koneksi, "SELECT rab.*, proyek.nama_proyek, karyawan.nama_karyawan FROM rab join proyek on proyek.id_proyek=rab.id_proyek join karyawan on karyawan.id_karyawan=rab.id_karyawan  WHERE id_rab = '$id_rab' ");

$detail_angg = mysqli_query($koneksi, "SELECT * FROM rab_detail WHERE id_rab = '$id_rab'");

$data = mysqli_fetch_array($result);
 function rp($angka){    
    $angka = number_format($angka); $angka = str_replace(',', '.', $angka); 
    $angka ="$angka";   
    return $angka;
 }                           

 ?>
<html>
    <head>
    </head>
    <body>
        <div class="col-md-12 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA RAB</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST" enctype="multipart/form-data">
                   
                   <div class="form-group">
                        <label>ID RAB</label>
                        <input class="form-control" readonly="true" value="<?php echo $data['id_rab'] ?>" type="text" name="id_rab" >
                    </div>
                    <div class="form-group">
                        <label>Proyek</label>
                        <input class="form-control" readonly="true" value="<?php echo $data['nama_proyek'] ?>" type="text" >
                    </div>
                    <div class="form-group">
                        <label>Project Manager</label>
                        <input class="form-control" readonly="true" value="<?php echo $data['nama_karyawan'] ?>" type="text" >
                    </div>
                    <div class="form-group">
                        <label>Periode</label>
                        <input class="form-control" readonly="true" value="<?php echo $data['periode'] ?>" type="text" >
                    </div>
                    <div class="form-group">
                      <label>Detail Anggaran</label>
                    </div>
                     
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field">
                            <tr>
                                <td><b>Nama Anggaran</b></td>
                                <td><b>Nominal</b></td>
                                <td><b>Status</b></td>
                                <td><b>Catatan</b></td>
                                <td><b>Keterangan</b></td>
                            </tr>
                            <?php 
                            while($data2 = mysqli_fetch_array($detail_angg)) {?>

                            <tr>
                                <td>
                                    <input type="hidden" name="id_det[]" value="<?php echo $data2['id_det'] ?>" />
                                    <span><?php echo $data2['nama_anggaran'] ?></span>
                                </td>
                                <td>
                                    <span>Rp <?php echo rp($data2['nominal']) ?></span>
                                </td>
                                <td>
                                     <select class="form-control" name="status[]">
                                    <option <?php if( $data2['status']=='Belum Disetujui'){echo "selected"; } ?> value="Belum Disetujui">Belum disetujui</option>
                                    <option <?php if( $data2['status']=='Disetujui'){echo "selected"; } ?> value="Disetujui">Setuju</option>
                                    <option <?php if( $data2['status']=='Tidak Disetujui'){echo "selected"; } ?> value="Tidak Disetujui">Tidak setuju</option>
                                   
                                    
                                    </select>
                                </td> 
                                <td>
                                    <input type="text" name="catatan[]" placeholder="Catatan" class="form-control name_list" value="<?php echo $data2['catatan'] ?>">
                                </td>
                                <td>
                                    <span><?php echo $data2['keterangan'] ?></span>
                                </td> 
                            
                            </tr>
                            <?php } ?>
                        </table>
                        
                    </div>

                    
                    <button type="submit" name="submit" class="btn btn-info">Save </button>
                    <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a>

                </form>
        </div>
    </div>
</div>
    </body>
</html>
     
<?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $id_rab = $_POST['id_rab'];
        $number = count($_POST["id_det"]);
        $jml = 0;
        
            for($i=0; $i<$number; $i++)
            {
                mysqli_query($koneksi, "UPDATE rab_detail SET status='".$_POST["status"][$i]."', catatan='".$_POST["catatan"][$i]."' WHERE id_det='".$_POST["id_det"][$i]."'");
                if ($_POST["status"][$i]=='Disetujui') {
                    $jml++;
                }
               
            }
        
        // include database connection file
        //include_once("config.php");
        //audit trails
        date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'User Menambahkan RAB'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')"); 
        if ($number==$jml) {
            $result = mysqli_query($koneksi, "UPDATE rab SET keterangan='Approved' WHERE id_rab='".$_POST['id_rab']."'");
        }else{
            $result = mysqli_query($koneksi, "UPDATE rab SET keterangan='Pending' WHERE id_rab='".$_POST['id_rab']."'");
        }    
        
        // // Show message when user added
        // ?>
         <script type="text/javascript">
             alert("Data Rancangan Anggaran Biaya Berhasil Diupdate");
                location="?page=rab_manager";
        // </script>
          <?php
    }
    ?>
