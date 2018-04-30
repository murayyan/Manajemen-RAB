<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA PERIZINAN</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="id_kategori">
                        <?php
                        $result = mysqli_query($koneksi, "SELECT * FROM kategori_perizinan ORDER BY kategori ASC");
                          
                            while($data = mysqli_fetch_array($result)) {   
                        ?>
                        <option value="<?php echo $data['id_kategori']; ?>"><?php echo $data['kategori']; ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pengajuan</label>
                        <input class="form-control datepicker" type="text" name="tanggal_pengajuan" id="tanggal_pengajuan">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input class="form-control datepicker" type="text" name="tanggal_mulai" id="tanggal_mulai">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Selesai</label>
                        <input class="form-control datepicker" type="text" name="tanggal_selesai" id="tanggal_selesai">
                    </div>  
                    <div class="form-group">
                        <label>Lama</label>
                        <input class="form-control" type="text" name="lama">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input class="form-control" type="text" name="keterangan">
                    </div>
                    <div class="form-group">
                        <label>Attachment</label>
                        <input name="attachment" type="file" />
                    </div>
                    <div class="form-group hidden">
                        <label>Created at</label>
                        <input class="form-control" type="text" name="created_at" value="<?php echo date('Y-m-d');?>">
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
        $id_karyawan = $_SESSION['id_karyawan'];
        $id_kategori = $_POST['id_kategori'];
        $tanggal_pengajuan = $_POST['tanggal_pengajuan'];
        $tanggal_mulai = $_POST['tanggal_mulai'];
        $tanggal_selesai = $_POST['tanggal_selesai'];
        $lama = $_POST['lama'];
        $keterangan = $_POST['keterangan'];
        //$attachment = $_POST['attachment'];
        //$created_at = $_POST['created_at'];

        
        $nama = $_FILES['attachment']['name'];
        $file_tmp = $_FILES['attachment']['tmp_name'];    

              
        $upload = move_uploaded_file($file_tmp, 'images/'.$nama);
        
        // include database connection file
        //include_once("config.php");
        //audit trails
        date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'User Mengajukan Perizinan'; 
        $id_karyawan    = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')");       
        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO perizinan(id_karyawan,id_kategori,tanggal_pengajuan,tanggal_mulai,tanggal_selesai,lama,keterangan,attachment,status) VALUES('$id_karyawan','$id_kategori','$tanggal_pengajuan','$tanggal_mulai','$tanggal_selesai','$lama','$keterangan','$nama','pending')"); 
       $idPerizinan = $koneksi->insert_id;
       $sqlAdmin = mysqli_query($koneksi, "select id_karyawan from karyawan where id_role = 'Role1'");
        while($user_data = mysqli_fetch_array($sqlAdmin)) {  
            date_default_timezone_set('Asia/Jakarta');
            $pesan          = 'User '.$_SESSION['nama_karyawan'].' mengajukan perizinan.';
            $id_penerima    = $user_data['id_karyawan'];
            $id_pembuat     = $_SESSION['id_karyawan'];
            $created_at     = date('Y-m-d H:i:s');
            $id_perizinan   = $idPerizinan;

            mysqli_query($koneksi, "INSERT INTO notification(pesan,id_penerima,id_pembuat,created_at,id_perizinan)values('$pesan', '$id_penerima', '$id_pembuat', '$created_at', '$id_perizinan')");
        }
    
        // Show message when user added
        ?>
        <script>
                alert("Data Karyawan Berhasil Ditambahkan ");
                location="?page=perizinan_karyawan";
            </script>
            <?php
    }
    ?>