<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA RAB</b>
        </div>
    <div class="panel-body">
      
                
  <div class="wrap">
     
        <form action="#" method="post">
             <div class="form-group">
                    <label>Proyek</label>
                    <select class="form-control" name="id_proyek">
                      <?php
                            //fetch all karyawan data form database
                            $result = mysqli_query($koneksi, "SELECT * FROM proyek");
                                while($data=mysqli_fetch_array($result)){
                                    ?>
                                    <option value="<?php echo $data['id_proyek']; ?>"><?php echo $data['nama_proyek']; ?>
                                        <?php } ?>
                                    </option>
                                }
                        </select>
                    </div>

             <div class="controls"> 
                <div class="form-group">
                    <label> Data TIM </label>
                    <div class="entry input-group">
                       <input class="form-control" type="text" name="addmore[]">
                        <span class="input-group-btn">
                            <button class="btn btn-success btn-add" type="button">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>

                    </div>
               </div>
            </div>

              <button type="submit" name="submit" class="btn btn-info">Save </button>
                    <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a>
        </form>
    </div>
    </div>
        </div>
    </div>
</div>
</section>

<?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        
        $id_proyek = $_POST['id_proyek'];
        $input = $_POST['addmore'];
        foreach ($input as $output) {
           
        
      
      
        
       
        //$created_at = $_POST['created_at'];

        
        // include database connection file
        //include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO rab (id_proyek,nama_rab) VALUES('$id_proyek','$output')"); 
       
        //var_dump($result); 
        //die();
        }
        // Show message when user added
        ?>
        <script>
                alert("Data RAB Berhasil Ditambahkan ");
                location="?page=rab_indexuser";
        </script>
    <?php
    }
    ?>
