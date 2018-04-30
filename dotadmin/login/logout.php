<?php
// echo "<script>alert('Terima kasih, Anda Berhasil Logout')</script>";
echo "<script>
if (confirm('Apakah anda yakin untuk keluar ?')) { 

   window.location='../login/confirmlogout.php'; 
}else{

   window.location='../index.php';  // do other thing
}
</script>";  
// echo "<meta http-equiv='refresh' content='1 url=../login/index.php'>";
//audit trails
        
?>
