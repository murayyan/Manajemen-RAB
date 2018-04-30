   <div class="header col-md-12" style="margin-top: 15px;">

                    <div >
                                <a href="?page=rab_create" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                            
                    </div>

        </div>



    <div class="col-md-12" style="margin-top: 5px;">

                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Rancangan Anggaran Biaya
                        </div>

                        <div class="panel-body">
                            <form method="POST">
                            <button type="submit" name="register" class="btn btn-success">Register</button>
                            <button type="submit" name="unregister" class="btn btn-danger">Unregister</button>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>Status</th>
                                            <th>Kode RAB</th>
                                            <th>Proyek</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                     
                                    // Fetch all users data from database
                                    //inner join
                                   $result = mysqli_query($koneksi, "SELECT rab.*, proyek.nama_proyek, karyawan.nama_karyawan FROM rab join proyek on proyek.id_proyek=rab.id_proyek join karyawan on karyawan.id_karyawan=rab.id_karyawan  ");

                                      //searching
                                       
                                          
                                        while($user_data = mysqli_fetch_array($result)) {   
                                    ?>
                                        <tr>
                                            <?php 
                                            if ($user_data['keterangan']=='Approved') {
                                                echo "<td></td>";
                                            }else{
                                                
                                           
                                         ?>
                                            <td><input class="form-check-input" type="checkbox" name="id_rab[]" value="<?php echo $user_data['id_rab'] ?>"></td>
                                            <?php } ?>
                                            <td><?php echo $user_data['keterangan'] ?></td>
                                            <td><?php echo $user_data['id_rab'] ?></td>
                                            <td><?php echo $user_data['nama_proyek'] ?></td>
                                           
                                            <td>
                                                
                                                    <a href="?page=rab_detail&id=<?php echo $user_data['id_rab'];?>" class="btn btn-primary"><i class="fa fa-search"></i></a>
                                                <?php if ($user_data['keterangan']=="Draft" || $user_data['keterangan']=="Pending") {?>
                                                <a href="?page=rab_edit&id=<?php echo $user_data['id_rab'];?>"    class="btn btn-info"><i class="fa fa-pencil"></i>
                                                </a>    
                                                <a href="?page=rab_delete&id=<?php echo $user_data['id_rab'];?>"    class="btn btn-danger"><i class="fa fa-trash"></i>
                                                </a>
                                                <?php }else{
                                                    
                                                    
                                                } ?>
                                                
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                               
                            </div>
                             </form>
                        </div>
                    </div>
                </div>

                <?php 
// Get id from URL to delete that user
if (isset($_POST['register'])) {
    $chk=$_POST['id_rab'];
    // Delete user row from table based on given id
    foreach ($chk as $val) {
        $result =  mysqli_query($koneksi, "UPDATE rab SET keterangan='Register' WHERE id_rab='$val'");
    }
    


?>
<script>
alert("Data RAB Telah Diregister");
location="?page=rab_index";
</script>
<?php
}
if (isset($_POST['unregister'])) {
    $chk=$_POST['id_rab'];
    // Delete user row from table based on given id
    foreach ($chk as $val) {
        $result =  mysqli_query($koneksi, "UPDATE rab SET keterangan='Draft' WHERE id_rab='$val'");
    }
?>
<script>
alert("Data RAB Telah Diunregister");
location="?page=rab_index";
</script>
<?php
}
 ?>
               