<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA BARANG</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Kode Barang</label>
                        <input class="form-control" type="text" name="id_barang">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" type="text" name="nama_barang">
                    </div>
                    

                    <div class="form-group">
                        <label>Kategori</label>
                    <select class="form-control" name="id_kategoribarang">
                        <?php
                            //fetch all karyawan data form database
                            $result = mysqli_query($koneksi, "SELECT * FROM kategori_barang ORDER BY nama_kategoribarang ASC");
                                while($data=mysqli_fetch_array($result)){
                                    ?>
                                    <option value="<?php echo $data['id_kategoribarang']; ?>"><?php echo $data['nama_kategoribarang']; ?>
                                        <?php } ?>
                                    </option>
                                }
                        </select>
                    </div>
                   

                    <div class="form-group">
                        <label>Jenis</label>
                    <select class="form-control" name="id_jenisbarang">
                        <?php
                            //fetch all karyawan data form database
                            $result = mysqli_query($koneksi, "SELECT * FROM jenis_barang ORDER BY nama_jenisbarang ASC");
                                while($data=mysqli_fetch_array($result)){
                                    ?>
                                    <option value="<?php echo $data['id_jenisbarang']; ?>"><?php echo $data['nama_jenisbarang']; ?>
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
                        <label>Attachment</label>
                        <input name="foto_barang" type="file" />
                    </div>
                    <div class="form-group">
                        <label>Tanggal Beli</label>
                        <input class="form-control datepicker" type="text" name="tgl_beli" id="tgl_beli">
                    </div> 
                     <div class="form-group">
                        <label>Created at</label>
                        <input class="form-control" type="text" name="created_at" value="<?php echo date('y-m-d');?>">
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
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $id_kategoribarang = $_POST['id_kategoribarang'];
        $id_jenisbarang = $_POST['id_jenisbarang'];
        $jumlah_barang = $_POST['jumlah_barang'];
        $merk_barang = $_POST['merk_barang'];
        $type_barang = $_POST['type_barang'];
        $warna_barang = $_POST['warna_barang'];
        $kondisi_barang = $_POST['kondisi_barang'];
        $id_lokasi = $_POST['id_lokasi'];

        $foto_barang = $_FILES['foto_barang']['name'];
        $file_tmp = $_FILES['foto_barang']['tmp_name'];    

              
        $upload = move_uploaded_file($file_tmp, 'images/'.$foto_barang);
        $tgl_beli = $_POST['tgl_beli'];
        //$created_at = $_POST['created_at'];

       //audit trails
        date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'Admin Menambah Barang'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')"); 
        
        // include database connection file
        //include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO Barang(id_barang,nama_barang,id_kategoribarang,id_jenisbarang,jumlah_barang,merk_barang,type_barang,warna_barang,kondisi_barang, id_lokasi, foto_barang, tgl_beli) VALUES('$id_barang','$nama_barang','$id_kategoribarang','$id_jenisbarang', '$jumlah_barang', '$merk_barang', '$type_barang', '$warna_barang', '$kondisi_barang', '$id_lokasi', '$foto_barang', '$tgl_beli')"); 
        //var_dump($result); // ini dicatat ya, biar ga lupa :)
        //die();
        
        // Show message when user added
        ?>
        <script>
                alert("Data Barang Berhasil Ditambahkan ");
                location="?page=barang_index";
            </script>
            <?php
    }
    ?>