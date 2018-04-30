<!--content-->
        
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Dashboard</h1>
                        <h1 class="page-subhead-line">Premium IOS, Android, and Website Development. Distinction On Technology.
                     </div> 
                </div>
                <!--<div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Rekap Techtalk Developer DOT</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>
                </div> -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-address-book fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                          <?php
                                          $result = $koneksi->query("SELECT COUNT(*) FROM `calonkaryawanbaru`");
                                            $row = $result->fetch_row();
                                            echo 'Data: ', $row[0];
                                            ?>

                                        </div>
                                        <div>Calon Karyawan</div>
                                    </div>
                                </div>
                            </div>
                              <a href="?page=hrd_index">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green" style="background-color: #5cb85c; color:#fff">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-drivers-license fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                           <?php
                                          $result = $koneksi->query("SELECT COUNT(*) FROM `karyawan`");
                                            $row = $result->fetch_row();
                                            echo 'Data: ', $row[0];
                                            ?>


                                        </div>
                                        <div>Karyawan</div>
                                    </div>
                                </div>
                            </div>
                            <a href="?page=karyawan_index">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow" style="background-color: #f0ad4e; color:#fff">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-bank fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                           <?php
                                          $result = $koneksi->query("SELECT COUNT(*) FROM `proyek`");
                                            $row = $result->fetch_row();
                                            echo 'Data: ', $row[0];
                                            ?>

                                        </div>
                                        <div>Proyek</div>
                                    </div>
                                </div>
                            </div>
                            <a href="?page=proyek_index">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red" style="background-color: #d9534f; color:#fff">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            <?php
                                          $result = $koneksi->query("SELECT COUNT(*) FROM `barang`");
                                            $row = $result->fetch_row();
                                            echo 'Data: ', $row[0];
                                            ?>

                                        </div>
                                        <div> Barang</div>
                                    </div>
                                </div>
                            </div>
                            <a href="?page=barang_index">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
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
    <!-- Categories techtalk -->
            <div class="panel panel-warning">
        <div class="panel-heading">
           Job Vacancies
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                   
                        <tr>
                            <td>Frontend Developer</td>
                            <td>Malang</td>
                        </tr>
                        <tr>
                           <td>Backend Developer</td>
                            <td>Malang</td>
                        </tr>
                        <tr>
                           <td>Android Developer</td>
                            <td>Malang</td>
                        </tr>
                        <tr>
                           <td>iOS Developer</td>
                            <td>Malang</td>
                        </tr>
                        <tr>
                           <td>Project Manager</td>
                            <td>Malang & Jakarta</td>
                        </tr>
                        <tr>
                           <td>Designer</td>
                            <td>Malang</td>
                        </tr>
                        <tr>
                           <td>Quality Assurance</td>
                            <td>Malang</td>
                        </tr>
                </table>
            </div>     
        </div>
    </div>
    
</div>

<div class="container-fluid">
<div class="row">


    <div class="col-md-8">

    <div class="panel panel-success">
        <div class="panel-heading">
            Perizinan (Pending)
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Tanggal Mulai</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                     
                    $result = mysqli_query($koneksi, "SELECT perizinan.*, karyawan.nama_karyawan, kategori_perizinan.kategori FROM perizinan join karyawan on perizinan.id_karyawan=karyawan.id_karyawan join kategori_perizinan on kategori_perizinan.id_kategori=perizinan.id_kategori where perizinan.status = 'pending' ORDER BY perizinan.idp DESC");

                            while($data = mysqli_fetch_array($result)) {   
                        ?>
                        <tr>
                            <td><?php echo $data['nama_karyawan'] ?></td>
                            <td><?php echo $data['tanggal_pengajuan'] ?></td>
                            <td><?php echo $data['tanggal_mulai'] ?></td>
                            <td><?php echo $data['status'] ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>     
        </div>
    </div>
</div>


<div class="col-md-4">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                Profile
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
            </div>
        </div>
      </div>