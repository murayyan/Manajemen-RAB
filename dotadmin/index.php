<?php 
    // Create database connection using config file
    include_once("config.php"); 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Kepegawaian PT DOT Indonesia</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!--PAGINATION-->
    <link href="assets/dataTables/datatables.min.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/niken.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/datepicker.min.css">
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CHART  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?page=index.php"><h6><b>DISTINCTION ON TECHNOLOGY</b></h6></a>
            </div>

            <div class="header-right">
                <a href="login/Logout.php" class="btn" title="Logout" style="background-color:green"><i class="fa fa-sign-out fa-2x" style="color:white"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/fauser.jpg" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo $_SESSION['nama_karyawan']; ?>
                            <br />
                                <small> <?php echo $_SESSION['email']; ?> </small>
                            </div>
                        </div>

                    </li>

                    <?php 
                        if(  $_SESSION['id_role'] == 'Role1'){
                    ?>
                    <li>
                        <a href="?page=dashboard"><i class="fa fa-dashboard "></i>Hello Admin<span></span></a>
                    </li>

                                        
                    <li>
                        <a href="?page=rab_index"><i class="fa fa-bank "></i>Rancangan Anggaran Biaya <span></span></a>
                    </li>

                    <li>
                      <a href="?page=pengajuan_index"><i class="fa fa-archive"></i>Pengajuan Barang <span></span></a>
                      
                    </li>

                     <li>
                        <a href="?page=pembeli_index"><i class="fa fa-cart-plus "></i>Penanggung Jawab <span></span></a>
                    </li>
                    
                    <li>
                      <a href ="#"><i class="fa fa-folder-open"></i>Master Barang<span></span></a>
                      <ul class="nav">
                            <li>
                                 <a href="?page=barang_index">Data Barang <span></span></a>
                            </li>
                            <li>
                                 <a href="?page=barangkeluar_index">Barang Keluar <span></span></a>
                            </li>
                            
                      </ul>
                    </li>                

                    
                    <li>
                        <a href="?page=audit_index"><i class="fa fa-list "></i>Audit Trails<span></span></a>
                    </li>

                    <?php } ?>

                    <?php 
                        if(  $_SESSION['id_role'] == 'Role2'){
                    ?>
                    <li>
                        <a class="" href="?page=dashboard_user">Hello Karyawan</a>
                    </li>
                    <li>
                        <a href="?page=rab_view"><i class="fa fa-bank "></i>Rancangan Anggaran Biaya <span></span></a>
                    </li>

                    <li>
                      <a href="?page=pengajuan_index"><i class="fa fa-archive"></i>Pengajuan Barang <span></span></a>
                      
                    </li>

                     <li>
                        <a href="?page=pembeli_index"><i class="fa fa-cart-plus "></i>Penanggung Jawab <span></span></a>
                    </li>
                    <li>
                      <a href ="?page=barang_index"><i class="fa fa-folder-open"></i>Data Barang<span></span></a>
                      
                    </li>      
                    
                    <?php } ?>
                    <?php 
                        if(  $_SESSION['id_role'] == 'Role3'){
                    ?>
                    <li>
                        <a class="" href="?page=dashboard_user">Hello Project Manager</a>
                    </li>
                      <li>
                        <a href="?page=rab_index"><i class="fa fa-bank "></i>Rancangan Anggaran Biaya <span></span></a>
                    </li>

                    <li>
                      <a href="?page=pengajuan_index"><i class="fa fa-archive"></i>Pengajuan Pencairan<span></span></a>
                      
                    </li>

                     <li>
                        <a href="?page=pembeli_index"><i class="fa fa-cart-plus "></i>Penanggung Jawab <span></span></a>
                    </li>
                    <li>
                      <a href ="?page=barang_index"><i class="fa fa-folder-open"></i>Data Barang<span></span></a>
                      
                    </li>      
                           
                    
                    <?php } ?>
                    <?php 
                        if(  $_SESSION['id_role'] == 'Role4'){
                    ?>
                    <li>
                        <a class="" href="?page=dashboard_user">Hello CEO</a>
                    </li>
                     <li>
                        <a href="?page=rab_manager"><i class="fa fa-bank "></i>Rancangan Anggaran Biaya <span></span></a>
                    </li>
                    <li>
                      <a href="?page=pengajuan_manager"><i class="fa fa-archive"></i>Pengajuan Pencairan<span></span></a>
                      
                    </li>
                    
                           
                    
                    <?php } ?>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
           <div id="page-inner" style="min-height: 1350px;">
            <?php

            
            $page = '';
             
            if( isset($_GET['page']) ){

              $page=$_GET['page'];

            }
            
            $path="views/$page.php";
            
            if(!empty($page) && file_exists($path)){

                include $path;
                // echo "<pre>";
                // print_r($path);
                // die();

            }else{

                include 'views/dashboard.php';
                
            }
        
        ?>
        
           </div>
    <div id="footer-sec" >
        &copy; 2018 Distinction On Technology. All Right Reserved.</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <!-- BOOTSTRAP SCRIPTS -->
    
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <!-- PAGINATION -->
    <script src="assets/Datatables/datatables.min.js"></script>
    
    <script type="text/javascript" src="assets/js/datepicker.min.js"></script>
    <script type="text/javascript">
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
      });
    </script>
     <script type="text/javascript">
      $(document).ready(function(){
      $('#tabel_audit').DataTable();
      });
    </script>
</body>
</html>