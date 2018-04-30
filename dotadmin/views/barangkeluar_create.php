<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA BARANG KELUAR</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST">
                    <div class="form-group">
                        <label>Kode Barang Keluar</label>
                        <input class="form-control" type="text" name="id_barangkeluar">
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
                        <label>Jumlah</label>
                        <input class="form-control" type="text" name="jumlah_barang">
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
                    <div class="form-group">
                        <label>Kondisi</label>
                    
                        <select class="form-control" name="kondisi_barang">
                        <option> Baik</option>
                             <option> Rusak</option>   
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Lokasi</label>
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
                        <label>Tanggal Keluar</label>
                        <input class="form-control datepicker" type="text" name="tgl_keluar">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input class="form-control" type="text" name="keterangan">
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
        $id_barangkeluar = $_POST['id_barangkeluar'];
        $id_barang = $_POST['id_barang'];
        $jumlah_barang = $_POST['jumlah_barang'];
        $merk_barang = $_POST['merk_barang'];
        $type_barang = $_POST['type_barang'];
        $warna_barang = $_POST['warna_barang'];
        $kondisi_barang = $_POST['kondisi_barang'];
        $id_lokasi = $_POST['id_lokasi'];
        $tgl_keluar = $_POST['tgl_keluar'];
        $keterangan = $_POST['keterangan'];
        //$created_at = $_POST['created_at'];

        
        // include database connection file
        //include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO barang_keluar (id_barangkeluar,id_barang,jumlah_barang,merk_barang,type_barang,warna_barang,kondisi_barang,id_lokasi,tgl_keluar, keterangan) VALUES('$id_barangkeluar','$id_barang','$jumlah_barang','$merk_barang', '$type_barang', '$warna_barang', '$kondisi_barang', '$id_lokasi', '$tgl_keluar', '$keterangan')"); 
        //var_dump($result); // ini dicatat ya, biar ga lupa :)
        //die();
        
        // Show message when user added
        ?>
        <script>
                alert("Data Barang Keluar Berhasil Ditambahkan ");
                location="?page=barangkeluar_index";
            </script>
            <?php
    }
    ?>