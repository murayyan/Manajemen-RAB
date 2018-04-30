   <div class="col-md-12" style="margin-top:15px;">
                        <a href="?page=pembeli_createuser"> 
                            <button class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Data</button>
                        </a>
</div>



    <div class="col-md-12" style="margin-top: 5px;">

                     <!--    Context Classes  -->
                    <div class="panel panel-default margin-top-niken">

                        <div class="panel-heading">
                            Penanggung Jawab 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                             <th>No</th>
                                            <th>Pengajuan</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Anggaran</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1;
                                     
                                    // Fetch all users data from database
                                   // $result = mysqli_query($koneksi, "SELECT * FROM Barang ORDER BY id_barang DESC");
                                    //iner join
                                    $result = mysqli_query($koneksi, "SELECT pembeli.*, pengajuan.nama_pengajuan, karyawan.nama_karyawan FROM pembeli join pengajuan on pengajuan.id_pengajuan = pembeli.id_pengajuan join karyawan on karyawan.id_karyawan=pembeli.id_karyawan  ");


                                    //searching
                                       if( isset($_POST['search']) ){
                                      $key=$_POST['search'];
                                      $result = mysqli_query($koneksi, "SELECT pembeli.*, pengajuan.nama_pengajuan, karyawan.nama_karyawan FROM pembeli join pengajuan on pengajuan.id_pengajuan = pembeli.id_pengajuan join karyawan on karyawan.id_karyawan=pembeli.id_karyawan WHERE pembeli.nama_karyawan LIKE '%$key%' ORDER BY pembeli.nama_karyawan DESC ");
                                     
                                      // $result = mysqli_query($koneksi, "SELECT * FROM barang where nama_barang LIKE '%$key%' ORDER BY id_barang DESC");
                                       //var_dump($result);
                                      // die();

                                          }

                                    //if( isset($_POST['search']) ){
                                         // $key=$_POST['search'];
                                          //$result = mysqli_query($koneksi, "SELECT .*, karyawan.nama_karyawan FROM absensi join karyawan on absensi.id_karyawan=karyawan.id_karyawan WHERE karyawan.nama_karyawan LIKE '%$key%' ORDER BY absensi.id_karyawan DESC");
                                      
                                        while($user_data = mysqli_fetch_array($result)) {   
                                    ?>
                                    <tr>
                                            <td><?php echo $no++?> .</td>
                                            <td><?php echo $user_data['nama_pengajuan'] ?></td>
                                            <td><?php echo $user_data['tgl_beli'] ?></td>
                                            <td><?php echo $user_data['anggaran'] ?></td>
                                            <td>
                                                <a href="?page=pembeli_detailuser&id=<?php echo $user_data['id_pembeli'];?>">
                                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                </a>
                                                <a href="?page=pembeli_edituser&id=<?php echo $user_data['id_pembeli'];?>">
                                                    <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>