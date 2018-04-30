   <div class="col-md-12" style="margin-top:15px;">
     <a href="?page=barang_exportuser"> 
     <button class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Export Excel</button>
     </a>
</div>



    <div class="col-md-12" style="margin-top: 5px;">

                     <!--    Context Classes  -->
                     <div class="panel panel-default margin-top-niken">

                        <div class="panel-heading">
                            Barang
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Barang</th>
                                            <th>Kategori</th>
                                            <th>Jumlah</th>
                                            <th>Lokasi</th>
                                            <th>Tanggal Beli</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                      $no = 1;
                                    // Fetch all users data from database
                                   // $result = mysqli_query($koneksi, "SELECT * FROM Barang ORDER BY id_barang DESC");
                                    //iner join
                                    $result = mysqli_query($koneksi, "SELECT barang.*, kategori_barang.nama_kategoribarang, jenis_barang.nama_jenisbarang, lokasi.nama_lokasi FROM barang join kategori_barang on kategori_barang.id_kategoribarang = barang.id_kategoribarang join jenis_barang on jenis_barang.id_jenisbarang=barang.id_jenisbarang join lokasi on lokasi.id_lokasi=barang.id_lokasi ");


                                    //searching
                                       if( isset($_POST['search']) ){
                                      $key=$_POST['search'];
                                      $result = mysqli_query($koneksi, "SELECT barang.*, kategori_barang.nama_kategoribarang, jenis_barang.nama_jenisbarang, lokasi.nama_lokasi FROM barang join kategori_barang on kategori_barang.id_kategoribarang = barang.id_kategoribarang join jenis_barang on jenis_barang.id_jenisbarang=barang.id_jenisbarang join lokasi on lokasi.id_lokasi=barang.id_lokasi WHERE barang.nama_barang LIKE '%$key%' ORDER BY barang.nama_barang DESC ");
                                     
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
                                            <td><?php echo $user_data['nama_barang'] ?></td>
                                            <td><?php echo $user_data['nama_kategoribarang'] ?></td>
                                            <td><?php echo $user_data['jumlah_barang'] ?></td>
                                            <td><?php echo $user_data['nama_lokasi'] ?></td>
                                            <td><?php echo $user_data['tgl_beli'] ?></td>
                                            <td>
                                                <a href="?page=barang_detailuser&id=<?php echo $user_data['id_barang'];?>">
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