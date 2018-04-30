   <div class="header col-md-12" style="margin-top: 15px;">

                    <div >
                            <a href="?page=pengajuan_create">
                            <button class="btn btn-primary"><i class="fa fa-plus"></i> Buat Pengajuan</button>
                            </a>
                            <a href="views/rab_export.php" target="blank">
                                <button class="btn btn-primary"><i class="fa fa-download"></i> Export Excel</button>
                            </a>  
                    </div>

        </div>


    <div class="col-md-12"  style="margin-top: 5px;">

                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pengajuan
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Kode Pengajuan</th>
                                            <th>RAB</th>
                                            <th>Nama Pengajuan</th>
                                            <th>Nominal</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                     
                                    // Fetch all users data from database
                                    //$result = mysqli_query($koneksi, "SELECT * FROM pengajuan ORDER BY id_pengajuan DESC");
                                    //iner join 
                                     //iner join
                                    $result = mysqli_query($koneksi, "SELECT * FROM pengajuan WHERE id_karyawan='$_SESSION[id_karyawan]'");

                                    //searching
                                   
                                      
                                      while($user_data = mysqli_fetch_array($result)) {   
                                        //var_dump($result);
                                        //die()
                                    ?>
                                        <tr>
                                            <td><?php echo $user_data['id_pengajuan'] ?></td>
                                            <td><?php echo $user_data['id_rab'] ?></td>
                                            <td><?php echo $user_data['nama_pengajuan'] ?></td>
                                            <td><?php echo $user_data['biaya'] ?></td>
                                            <td><?php echo $user_data['status_pengajuan'] ?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>