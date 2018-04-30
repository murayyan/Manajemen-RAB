<?php 
$id_rab = $_GET['id'];
// Fetech user data based on id
//$result = mysqli_query($koneksi, "SELECT * FROM rab WHERE id_rab='$id_rab'");
//iner join
$result = mysqli_query($koneksi, "SELECT rab.*, proyek.nama_proyek, karyawan.nama_karyawan FROM rab join proyek on proyek.id_proyek=rab.id_proyek join karyawan on karyawan.id_karyawan=rab.id_karyawan  WHERE id_rab = '$id_rab' ");

$detail_angg = mysqli_query($koneksi, "SELECT * FROM rab_detail WHERE id_rab = '$id_rab'");

$data = mysqli_fetch_array($result);
$jml = 0;


 ?>
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
                        <input class="form-control" readonly="true" value="<?php echo $data['id_rab'] ?>" type="text" name="id_rab" >
                         <div class="id-rab" id="<?php echo $data['id_rab'] ?>"></div>
                    </div>
                    <div class="form-group">
                        <label>Proyek</label>
                        <input class="form-control" readonly="true" value="<?php echo $data['nama_proyek'] ?>" type="text" >
                    </div>                    
                    <div class="form-group">
                        <label>Periode</label>
                        <input class="form-control" readonly="true" value="<?php echo $data['periode'] ?>" type="text" >
                    </div>
                    <div class="form-group">
                      <label>Detail Anggaran</label>
                    </div>
                     
                    <div class="table-responsive">
                        <span id="result"></span>
                        <div id="live_data"></div>
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
    function fetch_data()  
    {  
        var id = $('.id-rab').attr('id'); 
        $.ajax({  
            url:"views/select.php",  
            method:"POST",  
            data: {id:id},
            success:function(data){  
                $('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){
        var id = $('.id-rab').attr('id'); 
        var anggaran = $('#na').val();  
        var nominal = $('#n').val();  
        if(anggaran == '')  
        {  
            alert("Masukkan Anggaran");  
            return false;  
        }  
        if(nominal == '')  
        {  
            alert("Masukkan Nominal");  
            return false;  
        }  
        $.ajax({  
            url:"views/insert.php",  
            method:"POST",  
            data:{id:id,anggaran:anggaran, nominal:nominal},  
            dataType:"text",  
            success:function(data)  
            {  
                 $('#result').html("<div class='alert alert-success'>"+data+"</div>"); 
                fetch_data();  
            }  
        })  
    });  
    
    function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"views/edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
             $('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.nama_anggaran', function(){  
        var id = $(this).data("id1");  
        var anggaran = $(this).val();  
        edit_data(id, anggaran, "nama_anggaran");  
    });  
    $(document).on('blur', '.nominal', function(){  
        var id = $(this).data("id2");  
        var nominal = $(this).val();  
        edit_data(id, nominal, "nominal");  
    });  
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id3");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"views/delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                     $('#result').html("<div class='alert alert-success'>"+data+"</div>");  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>
          
<?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        
        // include database connection file
        //include_once("config.php");
        //audit trails

        date_default_timezone_set('Asia/Jakarta');
        $waktu          = date('Y-m-d H:i:s');
        $content        = 'User Menambahkan RAB'; 
        $id_karyawan = $_SESSION['id_karyawan'];
        mysqli_query($koneksi, "INSERT INTO audit_trails(waktu,content,id_karyawan)values('$waktu', '$content', '$id_karyawan')"); 
    
        // Show message when user added
        ?>
        <script type="text/javascript">
             alert("Data Rancangan Anggaran Biaya Berhasil Diupdate");
                location="?page=rab_index";
        </script>
          <?php
    }
    ?>
