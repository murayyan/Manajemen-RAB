<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA PEMINJAMAN</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST">
                    <div class="form-group">
                        <label>Kode Peminjaman</label>
                        <input class="form-control" type="text" name="id_peminjaman">
                    </div>

                    <div class="form-group">
                        <label>Nama Karyawan</label>
                        <select class="form-control" name="id_karyawan">
                        <?php
                        $result = mysqli_query($koneksi, "SELECT * FROM karyawan ORDER BY nama_karyawan ASC");
                          
                            while($data = mysqli_fetch_array($result)) {   
                        ?>
                        <option value="<?php echo $data['id_karyawan']; ?>"><?php echo $data['nama_karyawan']; ?></option>
                        <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Peminjaman</label>
                        <input class="form-control datepicker" type="text" name="tgl_peminjaman">
                    </div>

                    <div class="form-group">
                        <label>Nama Barang</label>
                        <select class="form-control" name="id_barang">
                        <?php
                        $result = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY nama_barang ASC");
                          
                            while($data = mysqli_fetch_array($result)) {   
                        ?>
                        <option value="<?php echo $data['id_barang']; ?>"><?php echo $data['nama_barang']; ?></option>
                        <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Jumlah</label>
                        <input class="form-control" type="text" name="qty_peminjaman">
                    </div>
                    <div class="form-group">
                        <label>Kondisi</label>
                    
                        <select class="form-control" name="kondisi_barang">
                        <option> Baik</option>
                             <option> Rusak</option>   
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
                    <div class="form-group">
                        <label>Status</label>
                    
                        <select class="form-control" name="status">
                        <option> Dipinjam</option>
                             <option> Dikembalikan </option>   
                        </select>
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
        $id_peminjaman = $_POST['id_peminjaman'];
        $id_karyawan = $_POST['id_karyawan'];
        $tgl_peminjaman = $_POST['tgl_peminjaman'];
        $id_barang = $_POST['id_barang'];
        $qty_peminjaman = $_POST['qty_peminjaman'];
        $kondisi_barang = $_POST['kondisi_barang'];
        $merk_barang = $_POST['merk_barang'];
        $type_barang = $_POST['type_barang'];
        $warna_barang = $_POST['warna_barang'];
        $status = $_POST['status'];
        //$created_at = $_POST['created_at'];

        
        // include database connection file
        //include_once("config.php");

         //audit trails
        date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'Admin Menambah Peminjaman'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')");        


        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO peminjaman(id_peminjaman, id_karyawan, tgl_peminjaman, id_barang, qty_peminjaman, kondisi_barang, merk_barang, type_barang, warna_barang, status) VALUES('$id_peminjaman','$id_karyawan','$tgl_peminjaman','$id_barang','$qty_peminjaman','$kondisi_barang','$merk_barang','$type_barang', '$warna_barang', 'status')"); 

        //echo "INSERT INTO peminjaman(id_peminjaman, id_karyawan, tgl_peminjaman, id_barang, qty_peminjaman, kondisi_barang, merk_barang, type_barang, warna_barang, status) VALUES('$id_peminjaman','$id_karyawan','$tgl_peminjaman','$id_barang','$qty_peminjaman','$kondisi_barang','$merk_barang','$type_barang', '$warna_barang', '$status')";
      
      //  var_dump($result); // ini dicatat ya, biar ga lupa :)
      //  die();
        
        // Show message when user added
        ?>
        <script>
                alert("Data Barang Berhasil Ditambahkan ");
                location="?page=peminjaman_index";
            </script>
            <?php
    }
    ?>