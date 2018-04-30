   <div class="header col-md-12" style="margin-top: 15px;">
                    <div class="col-md-7">
                            <form role="form" method="POST" action="?page=barangkeluar_index">
                                <div class="form-group col-md-5">
                                <input class="form-control" type="text" name="search" value="">
                                </div>
                                <button type="submit" name="submit" class="btn btn-info col-md-2">Search </button>
                            </form>
                    </div>
                         <!--    Context Classes  -->
                       <div class="col-md-5">  
                            <a href="?page=barangkeluar_create">
                            <button class="btn btn-primary col-md-offset-5"><i class="fa fa-plus"></i> Tambah Data</button>
                            </a>
                            <a href="views/barangkeluar_export.php" target="blank">
                                <button class="btn btn-primary"><i class="fa fa-download"></i> Export Excel</button>
                            </a>      
                    </div>

        </div>



    <div class="col-md-12" style="margin-top: 5px;">

                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Barang Keluar
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Kode Barang Keluar</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Merek</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                     
                                    // Fetch all users data from database
                                     $result = mysqli_query($koneksi, "SELECT barang_keluar.*, barang.nama_barang, lokasi.nama_lokasi FROM barang_keluar join barang on barang_keluar.id_barang = barang.id_barang join lokasi on barang_keluar.id_lokasi=lokasi.id_lokasi");


                                    //searching
                                       if( isset($_POST['search']) ){
                                      $key=$_POST['search'];
                                      $result = mysqli_query($koneksi, "SELECT barang_keluar.*, barang.nama_barang, lokasi.nama_lokasi FROM barang_keluar join barang on barang_keluar.id_barang = barang.id_barang join lokasi on barang_keluar.id_lokasi=lokasi.id_lokasi  WHERE barang.nama_barang LIKE '%$key%' ORDER BY barang_keluar.id_barang DESC ");
                                      
                                
                                          }

                                      
                                        while($user_data = mysqli_fetch_array($result)) {   
                                    ?>
                                   
                                        <tr>
                                            <td><?php echo $user_data['id_barangkeluar'] ?></td>
                                            <td><?php echo $user_data['nama_barang'] ?></td>
                                            <td><?php echo $user_data['jumlah_barang'] ?></td>
                                            <td><?php echo $user_data['merk_barang'] ?></td>
                                            <td><?php echo $user_data['type_barang'] ?></td>
                    
                                            <td>
                                                <a href="?page=barangkeluar_detail&id=<?php echo $user_data['id_barangkeluar'];?>">
                                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                </a>
                                                <a href="?page=barangkeluar_edit&id=<?php echo $user_data['id_barangkeluar'];?>">
                                                    <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <a href="?page=barangkeluar_delete&id=<?php echo $user_data['id_barangkeluar'];?>">
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