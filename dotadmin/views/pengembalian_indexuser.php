     
                         <!--    Context Classes  -->
 <div class="col-md-12" style="margin-top:15px;">
     <a href="?page=pengembalian_createuser"> 
     <button class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Data</button>
     </a>
</div>



    <div class="col-md-12" style="margin-top: 5px;">

                     <!--    Context Classes  -->
                     <div class="panel panel-default margin-top-niken">

                        <div class="panel-heading">
                            Pengembalian Barang
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Kode Pengembalian</th>
                                            <th>Kode Peminjaman</th>
                                            <th>Nama Karyawan</th>
                                            <th>Nama Barang</th>
                                            <th>Tanggal Pengembalian</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                     
                                    // Fetch all users data from database
                                   //$result = mysqli_query($koneksi, "SELECT * FROM pengembalian ORDER BY id_pengembalian DESC");
                                      //iner join 
                                   $result = mysqli_query($koneksi, "SELECT pengembalian.*, karyawan.nama_karyawan, barang.nama_barang, lokasi.nama_lokasi FROM pengembalian join karyawan on karyawan.id_karyawan=pengembalian.id_karyawan join barang on barang.id_barang=pengembalian.id_barang join lokasi on lokasi.id_lokasi=pengembalian.id_lokasi ");

                                    //searching
                                       if( isset($_POST['search']) ){
                                      $key=$_POST['search'];
                                       $result = mysqli_query($koneksi, "SELECT pengembalian.*, karyawan.nama_karyawan, barang.nama_barang, lokasi.nama_lokasi FROM pengembalian join karyawan on karyawan.id_karyawan=pengembalian.id_karyawan join barang on barang.id_barang=pengembalian.id_barang join lokasi on lokasi.id_lokasi=pengembalian.id_lokasi WHERE karyawan.nama_karyawan LIKE '%$key%' ORDER BY pengembalian.id_karyawan DESC ");

                                          }


                                        while($user_data = mysqli_fetch_array($result)) {   
                                    ?>
                                        <tr>
                                            <td><?php echo $user_data['id_pengembalian'] ?></td>
                                            <td><?php echo $user_data['id_peminjaman'] ?></td>
                                            <td><?php echo $user_data['nama_karyawan'] ?></td>
                                            <td><?php echo $user_data['nama_barang'] ?></td>
                                            <td><?php echo $user_data['tgl_pengembalian'] ?></td>
                    
                                            <td>
                                                <a href="?page=pengembalian_detailuser&id=<?php echo $user_data['id_pengembalian'];?>">
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
                </div>