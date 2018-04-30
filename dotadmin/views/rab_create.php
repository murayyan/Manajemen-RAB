
<html>
    <head>
    </head>
    <body>
        <div class="col-md-12 col-sm-6 col-xs-12">
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
                      <label>Detail Anggaran</label>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field">
                            <tr>
                                <td><input type="text" name="nama_anggaran[]" placeholder="Nama Anggaran" class="form-control name_list" /></td>
                                <td><input type="text" name="nominal[]" placeholder="Nominal" class="form-control name_list" /></td>
                                <td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>
                            </tr>
                        </table>
                        
                    </div>

                    
                    <button type="submit" name="submit" class="btn btn-info">Save </button>
                    <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a>

                </form>
        </div>
    </div>
</div>
    </body>
</html>
        <script>
               
                     
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"> <td><input type="text" name="nama_anggaran[]" placeholder="Nama Anggaran" class="form-control name_list" /></td><td><input type="text" name="nominal[]" placeholder="Nominal" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
            </script>
          
<?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $id_rab = $_POST['id_rab'];
        $id_proyek = $_POST['id_proyek'];
        $id_karyawan = $_SESSION['id_karyawan'];
        //$attachment = $_POST['attachment'];
        //$created_at = $_POST['created_at'];
        $uploadattachment = $_FILES['attachment']['name'];
        $file_tmp = $_FILES['attachment']['tmp_name']; 
        $uploaddokumen = move_uploaded_file($file_tmp, 'images/'.$uploadattachment);
        
        $periode = $_POST['periode'];
        $keterangan = 'Belum Ditanggapi';
        $number = count($_POST["nama_anggaran"]);
        $jml = 0;
        if($number > 1)
        {
            for($i=0; $i<$number; $i++)
            {
                mysqli_query($koneksi, "INSERT INTO rab_detail(id_rab,nama_anggaran,nominal,status)values('$id_rab', '".$_POST["nama_anggaran"][$i]."','".$_POST["nominal"][$i]."', 'Belum Disetujui')");
                $jml += $_POST["nominal"][$i];
            }
        }
        
        // include database connection file
        //include_once("config.php");
        //audit trails
        date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'User Menambahkan RAB'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')"); 

        // Insert user data into table
         $result = mysqli_query($koneksi, "INSERT INTO rab (id_rab,id_proyek,id_karyawan,attachment,jumlah_pengajuan,jumlah_disetujui,periode,keterangan) VALUES('$id_rab','$id_proyek','$id_karyawan','$uploadattachment','$jml','','$periode','$keterangan')"); 
       
        
    
        // Show message when user added
        ?>
        <script type="text/javascript">
             alert("Data Rancangan Anggaran Biaya Berhasil Ditambahkan ");
                location="?page=rab_index";
        </script>
          <?php
    }
    ?>
