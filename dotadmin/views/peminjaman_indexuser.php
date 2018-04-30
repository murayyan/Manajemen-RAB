    <div class="col-md-12" style="margin-top:15px;">
     <a href="?page=peminjaman_createuser"> 
     <button class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Data</button>
     </a>
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
                                            <th>No.</th>
                                            <th>Kode Peminjaman</th>
                                            <th>Tanggal Peminjaman</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                      $no = 1;
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
                                            <td><?php echo $no++?> .</td>
                                            <td><?php echo $user_data['id_peminjaman'] ?></td>
                                            <td><?php echo $user_data['tgl_peminjaman'] ?></td>
                                            <td><?php echo $user_data['nama_barang'] ?></td>
                                            <td><?php echo $user_data['qty_peminjaman'] ?></td>
                                            

                                            <td>
                                                <a href="?page=peminjaman_detailuser&id=<?php echo $user_data['id_peminjaman'];?>">
                                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                </a>
                                                <a href="?page=peminjaman_edituser&id=<?php echo $user_data['id_peminjaman'];?>">
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