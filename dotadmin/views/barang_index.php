   <div class="header col-md-12" style="margin-top: 15px;">
                    <div class="col-md-7">
                            <form role="form" method="POST" action="?page=barang_index">
                                <div class="form-group col-md-5">
                                <input class="form-control" type="text" name="search" value="">
                                </div>
                                <button type="submit" name="submit" class="btn btn-info col-md-2">Search </button>
                            </form>
                    </div>
                         <!--    Context Classes  -->
                       <div class="col-md-5">  
                            <a href="?page=barang_create">
                            <button class="btn btn-primary col-md-offset-5"><i class="fa fa-plus"></i> Tambah Data</button>
                            </a>
                            <a href="views/barang_export.php" target="blank">
                                <button class="btn btn-primary"><i class="fa fa-download"></i> Export Excel</button>
                            </a>      
                    </div>

        </div>



    <div class="col-md-12" style="margin-top: 5px;">

                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Barang
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Kategori</th>
                                            <th>Jenis</th>
                                            <th>Jumlah</th>
                                            <th>Lokasi</th>
                                            <th>Tanggal Beli</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                     
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
                                            <td><?php echo $user_data['id_barang'] ?></td>
                                            <td><?php echo $user_data['nama_barang'] ?></td>
                                            <td><?php echo $user_data['nama_kategoribarang'] ?></td>
                                            <td><?php echo $user_data['nama_jenisbarang'] ?></td>
                                            <td><?php echo $user_data['jumlah_barang'] ?></td>
                                            <td><?php echo $user_data['nama_lokasi'] ?></td>
                                            <td><?php echo $user_data['tgl_beli'] ?></td>
                                            <td>
                                                <a href="?page=barang_detail&id=<?php echo $user_data['id_barang'];?>">
                                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                </a>
                                                <a href="?page=barang_edit&id=<?php echo $user_data['id_barang'];?>">
                                                    <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <a href="?page=barang_delete&id=<?php echo $user_data['id_barang'];?>">
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