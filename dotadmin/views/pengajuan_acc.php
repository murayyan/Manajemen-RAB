<?php
// Display selected user data based on id
// Getting id from url
$id_pengajuan = $_GET['id'];
// Fetech user data based on id
//$result = mysqli_query($koneksi, "SELECT * FROM rab WHERE id_rab='$id_rab'");
//iner join
$result = mysqli_query($koneksi, "SELECT * FROM pengajuan p JOIN rab r ON p.id_rab=r.id_rab JOIN proyek pr ON r.id_proyek=pr.id_proyek WHERE p.id_pengajuan='$id_pengajuan'");

$data = mysqli_fetch_array($result);

?>
<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DETAIL PENGAJUAN</b>
        </div>
    <div class="panel-body">
        <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
                <b>ID Pengajuan</b> <span class="pull-right"><?php echo $data['id_pengajuan']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Nama Proyek</b> <span class="pull-right"><?php echo $data['nama_proyek']; ?></span>
            </li>
            <li class="list-group-item">
                <b>RAB</b> <span class="pull-right"><?php echo $data['id_rab']; ?></span>
            </li>
             <li class="list-group-item">
                <b>Nama Pengajuan</b> 
                <span class="pull-right"><?php echo $data['nama_pengajuan']; ?></a></span>
            </li>
            
            <li class="list-group-item">
                <b>Nominal</b> <span class="pull-right"><?php echo $data['biaya']; ?></span>
            </li>

            <li class="list-group-item">
                <b>Alasan</b> <span class="pull-right"><?php echo $data['alasan']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Tgl Pengajuan</b> <span class="pull-right"><?php echo $data['tgl_pengajuan']; ?></span>
            </li>
            
            <form action="" method="POST">
                <?php 
                if ($data['status_pengajuan']!='Dicairkan') {
                    echo "<button type='submit' name='submit' class='btn btn-info'>Cairkan Dana </button>";
                }
                 ?>
                
                <button onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</button>
            </form>
             
        </ul>
    </div>
    </div>
</div>

<?php 

if (isset($_POST['submit'])) {
    $result2 = mysqli_query($koneksi, "UPDATE pengajuan SET status_pengajuan='Dicairkan' WHERE id_pengajuan='$data[id_pengajuan]'");
        // Show message when user added
        ?>
        <script type="text/javascript">
             alert("Pengajuan telah dicairkan");
                location="?page=pengajuan_manager";
        </script>
          <?php
    
} ?>