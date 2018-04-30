   <div class="header col-md-12" style="margin-top: 15px;">
                    <div class="col-md-7">
                            <form role="form" method="POST" action="?page=audit_index">
                                <div class="form-group col-md-5">
                               
                                </div>
                               
                            </form>
                    </div>
                         <!--    Context Classes  -->
                       <div class="col-md-5">  
                             
                    </div>

        </div>



    <div class="col-md-12" style="margin-top: 5px;">

                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Audit Trails
                             <a href="views/audit_export.php" target="blank">
                                <button class="btn btn-primary pull-right"><i class="fa fa-download"></i> Export Excel</button>
                            </a>    
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="tabel_audit">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Date</th>
                                            <th>Content</th>
                                            <th>User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                     
                                    // Fetch all users data from database
                                    //$result = mysqli_query($koneksi, "SELECT * FROM audit_trails ORDER BY waktu ASC");
                                    $result = mysqli_query($koneksi, "SELECT audit_trails.*, karyawan.nama_karyawan FROM audit_trails join karyawan on audit_trails.id_karyawan=karyawan.id_karyawan ORDER BY audit_trails.waktu DESC");

                                    // searching
                                        if( isset($_POST['search']) ){
                                          $key=$_POST['search'];
                                          $result = mysqli_query($koneksi, "SELECT audit_trails.*, karyawan.nama_karyawan FROM audit_trails join karyawan on audit_trails.id_karyawan=karyawan.id_karyawan WHERE karyawan.nama_karyawan LIKE '%$key%' ORDER BY audit_trails.id_karyawan DESC");
                                        }
                                      $noUrut = 1;
                                        while($user_data = mysqli_fetch_array($result)) {   
                                    ?>
                                        <tr>
                                            <td><?php echo "$noUrut" ?></td>
                                            <td><?php echo $user_data['waktu'] ?></td>
                                            <td><?php echo $user_data['content'] ?></td>
                                            <td>
                                                <?php echo $user_data['nama_karyawan'] ?></td>
                                            </td>
                                        </tr>
                                        <?php $noUrut++; ?>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
                </div>