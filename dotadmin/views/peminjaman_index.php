   <div class="header col-md-12" style="margin-top: 15px;">
                    <div class="col-md-7">
                            <form role="form" method="POST" action="?page=peminjaman_index">
                                <div class="form-group col-md-5">
                                <input class="form-control" type="text" name="search" value="">
                                </div>
                                <button type="submit" name="submit" class="btn btn-info col-md-2">Search </button>
                            </form>
                    </div>
                         <!--    Context Classes  -->
                       <div class="col-md-5">  
                            <a href="?page=peminjaman_create">
                            <button class="btn btn-primary col-md-offset-5"><i class="fa fa-plus"></i> Tambah Data</button>
                            </a>
                            <a href="views/peminjaman_export.php" target="blank">
                                <button class="btn btn-primary"><i class="fa fa-download"></i> Export Excel</button>
                            </a>      
                    </div>

        </div>



    <div class="col-md-12" style="margin-top: 5px;">

                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Peminjaman Barang
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Kode Peminjaman</th>
                                            <th>Nama Karyawan</th>
                                            <th>Tanggal Peminjaman</th>
                                            <th>Nama Barang</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                     
                                    // Fetch all users data from database
                                   // $result = mysqli_query($koneksi, "SELECT * FROM Peminjaman ORDER BY id_Peminjaman DESC");
                                    //iner join
                                    $result = mysqli_query($koneksi, "SELECT peminjaman.*, karyawan.nama_karyawan, barang.nama_barang FROM peminjaman join karyawan on karyawan.id_karyawan=peminjaman.id_karyawan join barang on barang.id_barang=peminjaman.id_barang ");
                                      
                                     //searching
                                    if( isset($_POST['search']) ){
                                          $key=$_POST['search'];
                                           $result = mysqli_query($koneksi, "SELECT peminjaman.*, karyawan.nama_karyawan, barang.nama_barang FROM peminjaman join karyawan on karyawan.id_karyawan=peminjaman.id_karyawan join barang on barang.id_barang=peminjaman.id_barang WHERE karyawan.nama_karyawan LIKE '%$key%' ORDER BY peminjaman.id_karyawan DESC ");
                                         // $result = mysqli_query($koneksi, "SELECT peminjaman.*, karyawan.nama_karyawan FROM peminjaman join karyawan on peminjaman.id_karyawan=karyawan.id_karyawan WHERE karyawan.nama_karyawan LIKE '%$key%' ORDER BY peminjaman.id_karyawan DESC");
                                      }


                                        while($user_data = mysqli_fetch_array($result)) {   
                                    ?>
                                        <tr>
                                            <td><?php echo $user_data['id_peminjaman'] ?></td>
                                            <td><?php echo $user_data['nama_karyawan'] ?></td>
                                            <td><?php echo $user_data['tgl_peminjaman'] ?></td>
                                            <td><?php echo $user_data['nama_barang'] ?></td>
                                            <td><?php echo $user_data['status'] ?></td>
                                            

                                            <td>
                                                <a href="?page=peminjaman_detail&id=<?php echo $user_data['id_peminjaman'];?>">
                                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                </a>
                                                <a href="?page=peminjaman_edit&id=<?php echo $user_data['id_peminjaman'];?>">
                                                    <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <a href="?page=peminjaman_delete&id=<?php echo $user_data['id_peminjaman'];?>">
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
                </div>