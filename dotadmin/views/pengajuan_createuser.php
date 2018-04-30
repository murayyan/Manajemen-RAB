<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA PENGAJUAN</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST" >
                    <div class="form-group">
                        <label>Kode Pengajuan</label>
                        <input class="form-control" type="text" name="id_pengajuan">
                    </div>
                    <div class="form-group">
                        <label>Jenis Pengajuan</label>
                         <select class="form-control" name="id_jenispengajuan">
                            <?php
                            //fetch all karyawan data form database
                            $result = mysqli_query($koneksi, "SELECT * FROM jenis_pengajuan ORDER BY nama_jenispengajuan ASC");
                                while($data=mysqli_fetch_array($result)){
                                    ?>
                                    <option value="<?php echo $data['id_jenispengajuan']; ?>"><?php echo $data['nama_jenispengajuan']; ?>
                                        <?php } ?>
                                    </option>
                                }
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Nama Pengajuan</label>
                        <input class="form-control" type="text" name="nama_pengajuan">
                    </div>
                    <div class="form-group">
                        <label>Biaya</label>
                        <input class="form-control" type="text" name="biaya">
                    </div>
                     <div class="form-group">
                        <label>Link</label>
                        <input class="form-control" type="text" name="foto_pengajuan">
                    </div>
                    <div class="form-group">
                        <label>Alasan</label>
                        <input class="form-control" type="text" name="alasan">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pengajuan</label>
                        <input class="form-control datepicker" type="text" name="tgl_pengajuan">
                    </div>
                    <div class="form-group">
                        <label>Status Pengajuan</label>
                        <input class="form-control" type="text" name="status_pengajuan" readonly="readonly" value="Menunggu">
                    </div>

                   <!-- <div class="form-group">
                        <label>Status Pengajuan</label>
                    
                        <select class="form-control" name="status_pengajuan">
                        <option> Menunggu</option>
                             <option> Diterima</option> 
                             <option> Ditolak</option>   
                        </select>
                    </div> -->

                    <div class="form-group">
                        <label>Kode RAB</label>
                         <select class="form-control" name="id_rab">
                            <?php
                            //fetch all karyawan data form database
                            $result = mysqli_query($koneksi, "SELECT * FROM rab ORDER BY nama_rab ASC");
                                while($data=mysqli_fetch_array($result)){
                                    ?>
                                    <option value="<?php echo $data['id_rab']; ?>"><?php echo $data['nama_rab']; ?>
                                        <?php } ?>
                                    </option>
                                }
                        </select>
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
        $id_pengajuan = $_POST['id_pengajuan'];
        $id_karyawan = $_SESSION['id_karyawan'];
        $id_jenispengajuan = $_POST['id_jenispengajuan'];
        $nama_pengajuan = $_POST['nama_pengajuan'];
        $biaya = $_POST['biaya'];
        $foto_pengajuan = $_POST['foto_pengajuan'];
        $alasan = $_POST['alasan'];
        $tgl_pengajuan = $_POST['tgl_pengajuan'];
        $status_pengajuan = 'Menunggu';
        $id_rab = $_POST['id_rab'];
        //$created_at = $_POST['created_at'];

        
        // include database connection file
        //include_once("config.php");
         //audit trails
        date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'User Menambahkan Pengajuan'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')"); 
                
        // Insert user data into table
         $result = mysqli_query($koneksi, "INSERT INTO pengajuan (id_pengajuan,id_karyawan,id_jenispengajuan,nama_pengajuan,biaya,foto_pengajuan,alasan,tgl_pengajuan, status_pengajuan, id_rab) VALUES('$id_pengajuan','$id_karyawan','$id_jenispengajuan','$nama_pengajuan', '$biaya', '$foto_pengajuan', '$alasan', '$tgl_pengajuan', '$status_pengajuan', '$id_rab')"); 

         // echo "INSERT INTO pengajuan(id_pengajuan, id_karyawan, id_jenispengajuan, nama_pengajuan, biaya, foto_pengajuan, alasan, tgl_pengajuan, status_pengajuan, id_rab) VALUES('$id_pengajuan','$id_karyawan','$id_jenispengajuan','$nama_pengajuan','$biaya','$foto_pengajuan','$alasan','$tgl_pengajuan', '$status_pengajuan', '$id_rab')";
        //var_dump($result); // ini dicatat ya, biar ga lupa :)
        //die();
        
        // Show message when user added
        ?>
        <script>
                alert("Data Pengajuan Berhasil Ditambahkan ");
                location="?page=pengajuan_indexuser";
            </script>
            <?php
    }
    ?>