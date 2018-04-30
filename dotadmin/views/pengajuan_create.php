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
                        <label>Proyek</label>
                        <select class="form-control" id="id_proyek" name="id_proyek">
                <option value="">Please Select</option>
                <?php
                $id_karyawan = $_SESSION['id_karyawan'];
                $query = mysqli_query($koneksi, "SELECT  r.id_proyek, p.nama_proyek FROM rab r JOIN proyek p ON r.id_proyek=p.id_proyek WHERE id_karyawan='$id_karyawan'");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <option value="<?php echo $row['id_proyek']; ?>">
                        <?php echo $row['nama_proyek']; ?>
                    </option>
                <?php
                }
                ?>
            </select>
                    </div>

                    <div class="form-group">
                        <label>RAB</label>
                        <select class="form-control" id="id_rab" name="id_rab">
                <option value="">Please Select</option>
                <?php
                $query = mysqli_query($koneksi, "SELECT  * FROM rab");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <option class="<?php echo $row['id_proyek']; ?>" value="<?php echo $row['id_rab']; ?>">
                        <?php echo $row['id_rab']; ?>
                    </option>
                <?php
                }
                ?>
            </select>
                    </div>


                    <div class="form-group" >
                        <label>Nama Anggaran</label>
                         <select class="form-control" id="anggaran" onchange="cek_nominal()" name="anggaran">
                <option value="">Please Select</option>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM rab_detail rd JOIN rab r ON rd.id_rab=r.id_rab WHERE rd.status='Disetujui'");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <option id="kota" class="<?php echo $row['id_rab']; ?>" value="<?php echo $row['id_det']; ?>">
                        <?php echo $row['nama_anggaran']; ?>
                    </option>
                <?php
                }
                ?>
            </select>

                    </div>
                    <div class="form-group">
                        <label>Nominal</label>
                        <input id="nominal" class="form-control" type="text" readonly="true" value="" name="nominal">
                    </div>
                    <div class="form-group">
                        <label>Alasan</label>
                        <input class="form-control" type="text" name="alasan">
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
        $id_rab = $_POST['id_rab'];
        $id_det = $_POST['anggaran'];
        $get_anggaran = mysqli_query($koneksi, "SELECT nama_anggaran FROM rab_detail WHERE id_det='$id_det'");
        $angg = mysqli_fetch_array($get_anggaran);
        $nominal = $_POST['nominal'];
        $alasan = $_POST['alasan'];
        $tgl_pengajuan = date('Y-m-d');
        //$created_at = $_POST['created_at'];

        
        // include database connection file
        //include_once("config.php");
                
        // Insert user data into table
         $result = mysqli_query($koneksi, "INSERT INTO pengajuan (id_pengajuan,id_karyawan,id_rab,nama_pengajuan,biaya,alasan,tgl_pengajuan, status_pengajuan) VALUES('$id_pengajuan','$id_karyawan','$id_rab','$angg[nama_anggaran]','$nominal', '$alasan', '$tgl_pengajuan', 'Belum Dicairkan')"); 

         // echo "INSERT INTO pengajuan(id_pengajuan, id_karyawan, id_jenispengajuan, nama_pengajuan, biaya, foto_pengajuan, alasan, tgl_pengajuan, status_pengajuan, id_rab) VALUES('$id_pengajuan','$id_karyawan','$id_jenispengajuan','$nama_pengajuan','$biaya','$foto_pengajuan','$alasan','$tgl_pengajuan', '$status_pengajuan', '$id_rab')";
        //var_dump($result); // ini dicatat ya, biar ga lupa :)
        //die();
        
        // Show message when user added
        ?>

        <script>
                alert("Data Pengajuan Berhasil Ditambahkan ");
                location="?page=pengajuan_index";
            </script>
            
            <?php
    }
    ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/js/jquery.chained.min.js"></script>
    <script>
            $("#id_rab").chained("#id_proyek");
            $("#anggaran").chained("#id_rab");
            function cek_nominal(){
                var id_det = $("#anggaran").val();
                $.ajax({
                    url: 'views/get_nominal.php',
                    data:"id_det="+id_det ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nominal').val(obj.nominal);
                });
            }
    </script>