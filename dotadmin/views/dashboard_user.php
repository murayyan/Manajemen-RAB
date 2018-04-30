<div class="row">
    <div class="col-md-12">
    
        <h1 class="page-head-line">Dashboard</h1>
        <h1 class="page-subhead-line">Premium IOS, Android, and Website Development. Distinction On Technology.

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
        <div class="main-box mb-red">
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
<div class="col-md-8">
<div class="panel panel-default">

                            <div id="carousel-example" class="carousel slide" data-ride="carousel" style="border: 2px solid #000;">

                                <div class="carousel-inner">
                                    <div class="item active">

                                        <img src="assets/img/slideshow/1.png" alt="" />

                                    </div>
                                    <div class="item">
                                        <img src="assets/img/slideshow/2.png" alt="" />

                                    </div>
                                    <div class="item">
                                        <img src="assets/img/slideshow/3.png" alt="" />

                                    </div>
                                </div>
                                <!--INDICATORS-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example" data-slide-to="1"></li>
                                    <li data-target="#carousel-example" data-slide-to="2"></li>
                                </ol>
                                <!--PREVIUS-NEXT BUTTONS-->
                                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>

<div class="col-md-4">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Profile
                                <a href="?page=karyawan_edit_self&id=<?php echo $_SESSION['id_karyawan'];?>">
                                    <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                                </a>
                            </div>
                            <div class="panel-body">
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
                                        <th>Username</th>
                                        <th><?php echo $data['username']; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <th><?php echo $data['tempat_lahir']; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <th><?php echo $data['tanggal_lahir']; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <th><?php echo $data['jenis_kelamin']; ?></th>
                                    </tr>
                                    <tr>
                                        <th>No HP</th>
                                        <th><?php echo $data['no_hp']; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <th><?php echo $data['alamat']; ?></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

                <div class="col-md-6">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                History Gaji
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
                                         
                                        $result = mysqli_query($koneksi, "SELECT gaji_karyawan.*, gaji_pokok.gaji from gaji_karyawan join gaji_pokok on gaji_pokok.id_gajipokok = gaji_karyawan.id_gajipokok where gaji_karyawan.id_karyawan='$id' order by gaji_karyawan.tanggal_periode desc");

                                                while($data = mysqli_fetch_array($result)) {   
                                            ?>
                                            <tr>
                                                <td><?php echo $data['tanggal_periode'] ?></td>
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

                <div class="col-md-6">
                <h3>Absen </h3>
                    <h5 class="page-head-line"></h5>

                    <div class=" margin-top-niken col-md-12"> 
                    <?php
                    $id_karyawan = $_SESSION['id_karyawan'];
                    $tanggal_absen = date('Y-m-d');
                    $absen = mysqli_query($koneksi,"select * from absensi where id_karyawan='$id_karyawan' and tanggal_absen='$tanggal_absen' limit 1");
                    if (mysqli_num_rows($absen) > 0){ 
                    $data=mysqli_fetch_array($absen);
                    
                    date_default_timezone_set('Asia/Jakarta');
                    $d1=new DateTime( $data['tanggal_absen'].' '.$data['jam_datang']); 
                    $d2=new DateTime( date('Y-m-d H:i:s')); 
                    $diff=$d2->diff($d1); 

                        if( $diff->h < 8 ) {
                        ?>
                        <a href="#">
                            <button class="btn btn-primary" disabled><i class="fa fa-sign-out"></i> Checkout</button>
                        </a>
                        <?php }else{ ?>
                        <a href="?page=absensi_pulang&id=<?php echo $data['cd'];?>">
                            <button class="btn btn-primary"><i class="fa fa-sign-out"></i> Checkout</button>
                        </a>
                        <?php } ?>

                    <?php }else{ 
                        date_default_timezone_set('Asia/Jakarta');
                        $jamSekarang=new DateTime( date('Y-m-d H:i:s')); 
                        $batasAbsen=new DateTime( date('Y-m-d 09:00:00')); 

                        //var_dump($jamSekarang > $batasAbsen);
                        if( $jamSekarang > $batasAbsen ){
                        ?>
                        <a href="#">
                            <button class="btn btn-primary disabled"><i class="fa fa-check"></i> Absen</button>
                        </a>
                        <?php }else{ ?>
                        <a href="?page=absensi_harian">
                        <button class="btn btn-primary"><i class="fa fa-check"></i> Absen</button>
                    </a> 

                    
                    <?php 
                        } 
                    }
                    ?>
                </div>
                </div>