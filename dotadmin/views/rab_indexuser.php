<div class="col-md-12" style="margin-top:15px;">
                        <a href="?page=rab_createuser"> 
                            <button class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Data</button>
                        </a>
</div>
                     <!--    Context Classes  -->
                    <div class="col-md-12">
                     <!--    Context Classes  -->
                    <div class="panel panel-default margin-top-niken">

                        
                        <div class="panel-heading">
                            Rancangan Anggaran Biaya 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                           
                                            <th>Proyek</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                     $no = 1;
                                    $id = $_SESSION['id_karyawan'];
                                    // Fetch all users data from database
                                    //$result = mysqli_query($koneksi, "SELECT * FROM perizinan ORDER BY id_karyawan DESC");
                                    //inner join
                                   $result = mysqli_query($koneksi, "SELECT rab.*, proyek.nama_proyek, karyawan.nama_karyawan FROM rab join proyek on proyek.id_proyek=rab.id_proyek join karyawan on karyawan.id_karyawan=rab.id_karyawan  ");

                                      //searching
                                       if( isset($_POST['search']) ){
                                      $key=$_POST['search'];
                                      $result = mysqli_query($koneksi, "SELECT rab.*, proyek.nama_proyek, karyawan.nama_karyawan,  FROM rab join proyek on proyek.id_proyek=rab.id_proyek join karyawan on karyawan.id_karyawan=rab.id_karyawan  WHERE rab.nama_rab LIKE '%$key%' ORDER BY rab.id_rab DESC ");
                                          }
                                            while($user_data = mysqli_fetch_array($result)) {   
                                        ?>
                                       <tr>
                                            <td><?php echo $no++?> .</td>
                                            
                                            <td><?php echo $user_data['nama_proyek'] ?></td>
                                            <td>
                                                <a href="?page=rab_detailuser&id=<?php echo $user_data['id_rab'];?>">
                                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                </a>
                                                <a href="?page=rab_edituser&id=<?php echo $user_data['id_rab'];?>">
                                                    <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <a href="?page=rab_deleteuser&id=<?php echo $user_data['id_rab'];?>">
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
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