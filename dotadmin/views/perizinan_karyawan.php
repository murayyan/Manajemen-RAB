<div class="col-md-12" style="margin-top:15px;">
                        
</div>
                     <!--    Context Classes  -->
                    <div class="col-md-12">
                     <!--    Context Classes  -->
                    <div class="panel panel-default margin-top-niken">

                        
                        <div class="panel-heading">
                        <a href="?page=perizinan_pengajuan"> 
                            <button class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Ajukan Perizinan</button>
                        </a>
                            Data Perizinan
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Kategori</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Selesai</th>
                                            <th>Lama</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $id = $_SESSION['id_karyawan'];
                                    // Fetch all users data from database
                                    //$result = mysqli_query($koneksi, "SELECT * FROM perizinan ORDER BY id_karyawan DESC");
                                    $result = mysqli_query($koneksi, "SELECT perizinan.*, karyawan.nama_karyawan, kategori_perizinan.kategori FROM perizinan join karyawan on perizinan.id_karyawan=karyawan.id_karyawan join kategori_perizinan on kategori_perizinan.id_kategori=perizinan.id_kategori WHERE perizinan.id_karyawan = '$id' ORDER BY perizinan.id_karyawan DESC");

                                      
                                        //searching
                                        if( isset($_POST['search']) ){
                                          $key=$_POST['search'];
                                          $result = mysqli_query($koneksi, "SELECT perizinan.*, karyawan.nama_karyawan, kategori_perizinan.kategori FROM perizinan join karyawan on perizinan.id_karyawan=karyawan.id_karyawan join kategori_perizinan on kategori_perizinan.id_kategori=perizinan.id_kategori WHERE karyawan.nama_karyawan LIKE '%$key%' AND perizinan.id_karyawan = '$id' ORDER BY perizinan.id_karyawan DESC");
                                        }
                                            while($user_data = mysqli_fetch_array($result)) {   
                                        ?>
                                        <tr>
                                            <td><?php echo $user_data['kategori'] ?></td>
                                            <td><?php echo $user_data['tanggal_pengajuan'] ?></td>
                                            <td><?php echo $user_data['tanggal_mulai'] ?></td>
                                            <td><?php echo $user_data['tanggal_selesai'] ?></td>
                                            <td><?php echo $user_data['lama'] ?></td>
                                            <td><?php echo $user_data['keterangan'] ?></td>
                                            <td>
                                                <a href="?page=perizinan_karyawan_detail&id=<?php echo $user_data['idp'];?>">
                                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                </a>
                                                <a href="?page=perizinan_karyawan_edit&id=<?php echo $user_data['idp'];?>">
                                                    <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <a href="?page=perizinan_karyawan_delete&id=<?php echo $user_data['idp'];?>">
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