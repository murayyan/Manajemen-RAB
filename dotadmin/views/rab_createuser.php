<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA RAB</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST" enctype="multipart/form-data">
                   <div class="form-group">
                        <label>ID RAB</label>
                        <input class="form-control" type="text" name="id_rab">
                    </div>
                      <div class="form-group">
                        <label>Nama RAB</label>
                        <input class="form-control" type="text" name="nama_rab">
                    </div>
                    <div class="form-group">
                        <label>Proyek</label>
                        <select class="form-control" name="id_proyek">
                        <?php
                        $result = mysqli_query($koneksi, "SELECT * FROM proyek ORDER BY nama_proyek ASC");
                          
                            while($data = mysqli_fetch_array($result)) {   
                        ?>
                        <option value="<?php echo $data['id_proyek']; ?>"><?php echo $data['nama_proyek']; ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Attachment</label>
                        <input name="attachment" type="file" />
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input class="form-control datepicker" type="text" name="periode">
                    </div>
                     <div class="form-group">
                        <label>Keterangan</label>
                        <input class="form-control" type="text" name="keterangan">
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-info">Save </button>
                    <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a>

                </form>
        </div>
    </div>
</div>
</section>

<?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $id_rab = $_POST['id_rab'];
        $nama_rab = $_POST['nama_rab'];
        $id_proyek = $_POST['id_proyek'];
        $id_karyawan = $_SESSION['id_karyawan'];
        //$attachment = $_POST['attachment'];
        //$created_at = $_POST['created_at'];
        $uploadattachment = $_FILES['attachment']['name'];
        $file_tmp = $_FILES['attachment']['tmp_name']; 
        $uploaddokumen = move_uploaded_file($file_tmp, 'images/'.$uploadattachment);
        
        $periode = $_POST['periode'];
        $keterangan = $_POST['keterangan'];
        
        // include database connection file
        //include_once("config.php");
        //audit trails
        date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'User Menambahkan RAB'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')"); 

        // Insert user data into table
         $result = mysqli_query($koneksi, "INSERT INTO rab (id_rab,nama_rab,id_proyek,id_karyawan,attachment,periode,keterangan) VALUES('$id_rab','$nama_rab','$id_proyek','$id_karyawan','$uploadattachment','$periode','$keterangan')"); 
       
        
    
        // Show message when user added
        ?>
        <script>
                alert("Data Rancangan Anggaran Biaya Berhasil Ditambahkan ");
                location="?page=rab_indexuser";
            </script>
            <?php
    }
    ?>

