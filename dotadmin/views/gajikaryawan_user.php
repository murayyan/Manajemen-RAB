
        <div class="header col-md-12" style="margin-top: 15px;">
                         <!--    Context Classes  -->
                            <a href="views/gajikaryawan_userexport.php" target="blank">
                                <button class="btn btn-primary pull-right"><i class="fa fa-download"></i> Export Excel</button>
                            </a>      

        </div>



    <div class="col-md-12"  style="margin-top: 5px;">

                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Gaji Karyawan
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal periode</th>
                                            <th>Sampai tanggal</th>
                                            <th>Nama</th>
                                            <th>Gaji Pokok</th>
                                            <th>Tunjangan</th>
                                            <th>Bonus</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    <?php
                                   $id =  $_SESSION['nama_karyawan'];
                                   $no = 1;
                                      $result = mysqli_query($koneksi, "SELECT gaji_karyawan.*, karyawan.nama_karyawan, gaji_pokok.gaji, tunjangan.jenis_tunjangan, bonus.keterangan FROM gaji_karyawan join karyawan on karyawan.id_karyawan=gaji_karyawan.id_karyawan join gaji_pokok on gaji_pokok.id_gajipokok = gaji_karyawan.id_gajipokok join tunjangan on tunjangan.id_tunjangan = gaji_karyawan.id_tunjangan join bonus on bonus.id_bonus = gaji_karyawan.id_bonus WHERE karyawan.nama_karyawan LIKE '%$id%' ORDER BY gaji_karyawan.id_karyawan DESC");

                                         // if(  $_SESSION['id_role'] == 'Role2')
                                        while($_SESSION = mysqli_fetch_array($result)) {   
                                    ?>
                                            <!-- <td><?php //echo $_SESSION['nama_karyawan']; ?></td> -->
                                            <td> <?php echo $no++?> .</td>
                                            <td><?php echo $_SESSION['tanggalperiode'] ?></td>
                                            <td><?php echo $_SESSION['tanggal_periode'] ?></td>
                                            <td><?php echo $_SESSION['nama_karyawan'] ?></td>
                                            <td><?php echo $_SESSION['gaji'] ?></td>
                                            <td><?php echo $_SESSION['jenis_tunjangan'] ?></td>
                                            <td><?php echo $_SESSION['keterangan'] ?></td>
                                            <td>
                                                <a href="?page=gajikaryawan_detail&id=<?php echo $_SESSION['id_gaji'];?>">
                                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
                </div>