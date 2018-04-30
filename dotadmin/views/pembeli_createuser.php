<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA PEMBELI</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Kode Pembeli</label>
                        <input class="form-control" type="text" name="id_pembeli">
                    </div>

                    <div class="form-group">
                        <label>Pengajuan</label>
                    <select class="form-control" name="id_pengajuan">
                        <?php
                            //fetch all karyawan data form database
                            $result = mysqli_query($koneksi, "SELECT * FROM pengajuan ORDER BY nama_pengajuan ASC");
                                while($data=mysqli_fetch_array($result)){
                                    ?>
                                    <option value="<?php echo $data['id_pengajuan']; ?>"><?php echo $data['nama_pengajuan']; ?>
                                        <?php } ?>
                                    </option>
                                }
                        </select>
                    </div>
                   

                    <div class="form-group">
                        <label>Tanggal Beli</label>
                        <input class="form-control datepicker" type="text" name="tgl_beli" id="tgl_beli">
                    </div> 

                    <div class="form-group">
                        <label>Anggaran</label>
                        <input class="form-control" type="text" name="anggaran">
                    </div>
                    <div class="form-group">
                        <label>Attachment</label>
                        <input name="attachment" type="file" />
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
        $id_pembeli = $_POST['id_pembeli'];
        $id_pengajuan = $_POST['id_pengajuan'];
        $id_karyawan = $_SESSION['id_karyawan'];
        $tgl_beli = $_POST['tgl_beli'];
        $anggaran = $_POST['anggaran'];

        $attachment = $_FILES['attachment']['name'];
        $file_tmp = $_FILES['attachment']['tmp_name'];    

              
        $upload = move_uploaded_file($file_tmp, 'images/'.$attachment);
        $tgl_beli = $_POST['tgl_beli'];
        //$created_at = $_POST['created_at'];

       //audit trails
        date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'User Menambah Data Pembeli'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')"); 
        
        // include database connection file
        //include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO pembeli(id_pembeli,id_pengajuan,id_karyawan,tgl_beli,anggaran,attachment) VALUES('$id_pembeli','$id_pengajuan','$id_karyawan','$tgl_beli', '$anggaran', '$attachment')"); 
        //var_dump($result); // ini dicatat ya, biar ga lupa :)
        //die();
        
        // Show message when user added
        ?>
        <script>
                alert("Data Pembeli Berhasil Ditambahkan ");
                location="?page=pembeli_indexuser";
            </script>
            <?php
    }
    ?>