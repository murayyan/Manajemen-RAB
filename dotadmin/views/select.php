<?php  
 include 'config.php';
 $id_rab = $_POST['id'];  
 $output = '';  
 $sql = "SELECT * FROM rab_detail WHERE id_rab = '$id_rab'";  
 $result = mysqli_query($koneksi, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>    
                     <th width="40%">Nama Anggaran</th>  
                     <th width="30%">Nominal</th> 
                     <th width="20%">Catatan</th>  
                     <th width="10%"></th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>   
                  <td><input class="form-control nama_anggaran" data-id1="'.$row["id_det"].'" value="'.$row["nama_anggaran"].'"></input> 
                     </td>
                     <td><input class="form-control nominal" data-id2="'.$row["id_det"].'" value="'.$row["nominal"].'"></input>
                     </td>
                     <td>'.$row["catatan"].'</td>
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id_det"].'" class="btn btn-md btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>   
                <td><input class="form-control" id="na"></input></td> 
                <td><input class="form-control" id="n"></input></td>  
                <td></td>   
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-md btn-success">+</button></td>  
           </tr>';  
 }  
 else  
 {  
      $output .= '
				<tr>    
                <td><input class="form-control" id="na"></input></td>  
                 <td><input class="form-control" id="n"></input></td>
                 <td></td> 
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-md btn-success">+</button></td>  
           </tr>'; 
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>