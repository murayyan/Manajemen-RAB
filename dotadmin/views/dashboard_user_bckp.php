<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line">Absensi</h1>

    </div>
</div>
<!-- /. ROW  -->
<div class="row">
    <?php 
    $id=$_SESSION['id_karyawan'];                                
    $result = mysqli_query($koneksi, "SELECT SUM(lama) as izin from perizinan where id_karyawan='$id' AND id_kategori='KAT1'");
    $data = mysqli_fetch_array($result);
    ?>
    <div class="col-md-4">
        <div class="main-box mb-dull">
            <a href="#">
                <h3><?php echo ( is_null($data['izin']) ) ? 0 : $data['izin']; ?></h3>
                <h5>Izin</h5>
            </a>
        </div>
    </div>
    <?php                               
    $result = mysqli_query($koneksi, "SELECT SUM(lama) as cuti from perizinan where id_karyawan='$id' AND id_kategori='KAT2'");
    $data = mysqli_fetch_array($result);
    ?>
    <div class="col-md-4">
        <div class="main-box mb-pink">
            <a href="#">
                <h3><?php echo ( is_null($data['cuti']) ) ? 0 : $data['cuti']; ?></h3>
                <h5>Cuti</h5>
            </a>
        </div>
    </div>
    <?php                               
    $result = mysqli_query($koneksi, "SELECT SUM(lama) as remote from perizinan where id_karyawan='$id' AND id_kategori='KAT3'");
    $data = mysqli_fetch_array($result);
    ?>
    <div class="col-md-4">
        <div class="main-box mb-dull">
            <a href="#">
                <h3><?php echo ( is_null($data['remote']) ) ? 0 : $data['remote']; ?></h3>
                <h5>Remote</h5>
            </a>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-6">
        <h1 class="page-head-line">History Gaji</h1>

        <div class="panel panel-default margin-top-niken col-md-12"> 
    
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Gaji Pokok</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                     
                    $result = mysqli_query($koneksi, "SELECT gaji_karyawan.*, gaji_pokok.gaji from gaji_karyawan join gaji_pokok on gaji_pokok.id_gajipokok = gaji_karyawan.id_gajipokok where gaji_karyawan.id_karyawan='$id' order by gaji_karyawan.tanggal_periodegaji desc");
       
                            while($data = mysqli_fetch_array($result)) {   
                        ?>
                        <tr>
                            <td><?php echo $data['tanggal_periodegaji'] ?></td>
                            <td><?php echo 'Rp.'.number_format($data['gaji'], 0, '.', '.') ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <h1 class="page-head-line">Absen</h1>

        <div class="panel panel-default margin-top-niken col-md-12"> 
        <?php
        $id_karyawan = $_SESSION['id_karyawan'];
        $tanggal_absen = date('Y-m-d');
        $absen = mysqli_query($koneksi,"select * from absensi where id_karyawan='$id_karyawan' and tanggal_absen='$tanggal_absen' limit 1");
        if (mysqli_num_rows($absen) > 0){ 
        $data=mysqli_fetch_array($absen);
        ?>
        <a href="?page=absensi_pulang&id=<?php echo $data['cd'];?>">
            <button class="btn btn-primary"><i class="fa fa-sign-out"></i> Checkout</button>
        </a>
        <?php }else{ ?>
        <a href="?page=absensi_harian">
            <button class="btn btn-primary"><i class="fa fa-check"></i> Absen</button>
        </a>
        <?php } ?>
    </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <h1 class="page-head-line">Biodata</h1>

        <div class="panel panel-default margin-top-niken col-md-12"> 
        <?php
        $id_karyawan = $_SESSION['id_karyawan'];
        
        $karyawan = mysqli_query($koneksi,"select * from karyawan where id_karyawan='$id_karyawan'");
        $data=mysqli_fetch_array($karyawan);
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th><?php echo $data['nama_karyawan']; ?></th>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <th><?php echo $data['tempat_lahir']; ?></th>
                </tr>
            </thead>
        </table>
    </div>
    </div>
</div>
<!-- /. ROW  -->
