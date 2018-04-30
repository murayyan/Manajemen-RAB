<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA PENGEMBALIAN</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST">
                    <div class="form-group">
                        <label>Kode Pengembalian</label>
                        <input class="form-control" type="text" name="id_pengembalian">
                    </div>


                    <div class="form-group">
                        <label>Kode_Peminjaman</label>
                       <select class="form-control" name="id_peminjaman">
                            <?php
                            //fetch all karyawan data form database
                            $result = mysqli_query($koneksi, "SELECT * FROM peminjaman ORDER BY id_peminjaman ASC");
                                while($data=mysqli_fetch_array($result)){
                                    ?>
                                    <option value="<?php echo $data['id_peminjaman']; ?>"><?php echo $data['id_peminjaman']; ?>
                                        <?php } ?>
                                    </option>
                                }
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Nama Karyawan</label>
                        <select class="form-control" name="id_karyawan">
                            <?php
                            //fetch all karyawan data form database
                            $result = mysqli_query($koneksi, "SELECT * FROM karyawan ORDER BY nama_karyawan ASC");
                                while($data=mysqli_fetch_array($result)){
                                    ?>
                                    <option value="<?php echo $data['id_karyawan']; ?>"><?php echo $data['nama_karyawan']; ?>
                                        <?php } ?>
                                    </option>
                                }
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Nama Barang</label>
                       <select class="form-control" name="id_barang">
                            <?php
                            //fetch all karyawan data form database
                            $result = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY nama_barang ASC");
                                while($data=mysqli_fetch_array($result)){
                                    ?>
                                    <option value="<?php echo $data['id_barang']; ?>"><?php echo $data['nama_barang']; ?>
                                        <?php } ?>
                                    </option>
                                }
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Tanggal Pengembalian</label>
                        <input class="form-control datepicker" type="text" name="tgl_pengembalian">
                    </div>
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input class="form-control" type="text" name="qty_pengembalian">
                    </div>
                    <div class="form-group">
                        <label>Kondisi</label>
                    
                        <select class="form-control" name="kondisi_barang">
                        <option> Baik</option>
                             <option> Rusak</option>   
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Lokasi Barang</label>
                        <select class="form-control" name="id_lokasi">
                            <?php
                            //fetch all karyawan data form database
                            $result = mysqli_query($koneksi, "SELECT * FROM lokasi ORDER BY nama_lokasi ASC");
                                while($data=mysqli_fetch_array($result)){
                                    ?>
                                    <option value="<?php echo $data['id_lokasi']; ?>"><?php echo $data['nama_lokasi']; ?>
                                        <?php } ?>
                                    </option>
                                }
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Merek</label>
                        <input class="form-control" type="text" name="merk_barang">
                    </div>
                    <div class="form-group">
                        <label>Type</label>
                        <input class="form-control" type="text" name="type_barang">
                    </div>
                    <div class="form-group">
                        <label>Warna</label>
                        <input class="form-control" type="text" name="warna_barang">
                    </div>
                    
                    
                    <button type="submit" name="submit" class="btn btn-info">Save </button>

                </form>
        </div>
    </div>
</div>
</section>

<?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $id_pengembalian = $_POST['id_pengembalian'];
        $id_peminjaman = $_POST['id_peminjaman'];
        $id_karyawan = $_POST['id_karyawan'];
        $id_barang = $_POST['id_barang'];
        $tgl_pengembalian = $_POST['tgl_pengembalian'];
        $qty_pengembalian = $_POST['qty_pengembalian'];
        $kondisi_barang = $_POST['kondisi_barang'];
        $id_lokasi = $_POST['id_lokasi'];
        $merk_barang = $_POST['merk_barang'];
        $type_barang = $_POST['type_barang'];
        $warna_barang = $_POST['warna_barang'];
        //$created_at = $_POST['created_at'];

        
        // include database connection file
        //include_once("config.php");
        //audit trails
        date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'User Menambah Data Pengembalian'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')"); 
                
        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO pengembalian (id_pengembalian,id_peminjaman,id_karyawan,id_barang,tgl_pengembalian,qty_pengembalian,kondisi_barang,id_lokasi,merk_barang, type_barang, warna_barang) VALUES('$id_pengembalian', '$id_peminjaman', '$id_karyawan','$id_barang','$tgl_pengembalian', '$qty_pengembalian', '$kondisi_barang', '$id_lokasi', '$merk_barang', '$type_barang', '$warna_barang')"); 
        //var_dump($result); // ini dicatat ya, biar ga lupa :)
        //die();
        
        // Show message when user added
        ?>
        <script>
                alert("Data Pengembalian Berhasil Ditambahkan ");
                location="?page=pengembalian_indexuser";
            </script>
            <?php
    }
    ?>