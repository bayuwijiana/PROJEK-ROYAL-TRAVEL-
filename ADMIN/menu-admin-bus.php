
<?php	


session_start();
 if(!isset( $_SESSION["ussername_admin-bus"] )){
        echo "<script>
                     alert('silahkan log in dahulu');
                    window.location ='../index.php';
             </script>";
    }
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ROYAL TRAVEL</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">

    <script src="js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">

<!--
    
TemplateMo 553 ROYAL TRAVEL

https://templatemo.com/tm-553-xtra-blog

-->
</head>
<body>
	<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo">
                     <img style=" height: 150px;width:150px;border-radius: 20px;" src="../assets/images/oke2.webp" alt="ROYAL TRAVEL">
                </div>   
                <br>
                <center>
                    <h1>ADMIN BUS</h1>
                </center>
            </div>
             
            <nav class="tm-nav" id="tm-nav"> 
                <ul>
                    <li class="tm-nav-item">
                        <img style=" margin-left: 20px;height: 50px;width:50px;border-radius: 50%;" src="../assets/images/oke3.png" alt="ROYAL TRAVEL">
                        <button class="btn btn-secondary" onclick="myFunction()">
                                UBAH MODE
                        </button>
                        <a href="../logout.php">
                    <button class="btn btn-secondary" >
                        logout
                    </button>
                  </a>
                    </li>
                    <li class="tm-nav-item"><a href="menu-admin-bus.php" class="tm-nav-link">
                         <img style=" margin-right: 10px;height: 40px;width:40px;border-radius: 10px;" src="../assets/images/oke5.jpg" alt="ROYAL TRAVEL">
                        DATA TERMINAL
                    </a></li>
                    
                    <li class="tm-nav-item"><a href="data-pemesanan-bus.php" class="tm-nav-link">
                        <img style=" margin-right: 10px;height: 40px;width:40px;border-radius: 10px;" src="../assets/images/PEMESANAN.jpg" alt="ROYAL TRAVEL">
                        DATA PEMESANAN
                    </a></li>
                    
                </ul>
            </nav>
            <div class="tm-mb-65">
                <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
                    <i class="fab fa-facebook tm-social-icon"></i>
                </a>
                <a href="https://twitter.com" class="tm-social-link">
                    <i class="fab fa-twitter tm-social-icon"></i>
                </a>
                <a href="https://instagram.com" class="tm-social-link">
                    <i class="fab fa-instagram tm-social-icon"></i>
                </a>
                <a href="https://linkedin.com" class="tm-social-link">
                    <i class="fab fa-linkedin tm-social-icon"></i>
                </a>
            </div>
            <p class="tm-mb-80 pr-5 text-white">
                ROYAL TRAVEL is a multi-purpose HTML template from TemplateMo website. Left side is a sticky menu bar. Right side content will scroll up and down.
            </p>
        </div>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
            <?php	
                   
                    if($_SESSION['ussername_admin-bus']=="admin_manager"){
                    ?>
                    </li>
                    <li class="tm-nav-item"><a href="menu-admin-manager.php" class="tm-nav-link">
                         <img style=" margin-right: 10px;height: 150px;width:150px;border-radius: 15px;" src="../assets/images/manager.jpg" alt="ROYAL TRAVEL">
                        MANAGER HOME
                    </a></li>
                    <br>
                    <h1>MANAGER</h1>
                    
                <a href="menu-admin-pesawat.php">
                    <button class="btn btn-primary">
                        PENERBANGAN
                    </button>
                </a>
                <a href="menu-admin-kereta.php">
                    <button class="btn btn-secondary">
                        STASIUN 
                    </button>
                </a>
                <a href="menu-admin-bus.php">
                    <button class="btn btn-info">
                        TERMINAL 
                    </button>
                </a>
                <a href="menu-admin-info.php">
                    <button class="btn btn-warning">
                        INFO 
                    </button>
                </a>



                    <?php	

                    }
                     ?>
<hr class="tm-hr-primary tm-mb-55">
            <H1> <b> DATA TERMINAL</b></H1>
            <div class="row tm-row">
                    <form action="" method="post" >
                        <button style="font-size:26px;width:200px;" class="btn btn-primary" name="semua">ALL TERMINAL</button>
                     </form><br><br>
                    <form method="post" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="nama" type="text" placeholder="Search Terminal" aria-label="Search" required>
                        <input type="hidden" name="cek" value="cari">
                        <button class="tm-search-button" name="cari" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>     

                    </form> 
                    <a href="tambah-terminal.php">
                        <button style="font-size:26px;width:200px;" class="btn btn-primary" name="tambah_stasiun">ADD TERMINAL</button> 
                        </a> <br>
                    <h2><b>DAFTAR TERMINAL</b></h2>
                  <table class="table table-dark table-striped" style="font-size:20px;width: 100%;margin-top:10px;">
                        <thead >
                            <td>No</td>
                            <td></td>
                            <td>Teminal</td>
                            <td>DIKota</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
                       </thead>            
                  
                  <?php	
                  include "read_admin.php";
                    
                    $c= new bandara();
                    if(isset($_POST['cari'])){
                        $nama=$_POST['nama'];
                            $nomor=1;
                            foreach ($c->tampil_terminalx($nama) as $data2){
                            
                ?>
                                <tr>
                                                        <td><?=$nomor++?></td>
                                                        <td >
                                                            <img style="width:100px;hight:40px;" src="../assets/images/<?=$data2['gambar_terminal']; ?>">
                                                        </td>
                                                        <td><?=$data2['nama_terminal']?></td>
                                                        <td><?=$data2['kota_asal_bus']?></td>               
                                
                                <td>
                                                            <form action="edit-bus.php" method="post">
                                                            <input type="hidden" name="id_bus" value="<?=$data2['id_bus']?>">
                                                            <input type="hidden" name="nama_terminal" value="<?=$data2['nama_terminal']?>">
                                                            
                                                            <input type="hidden" name="cek" value="edit">

                                                                <button class= "btn btn-secondary " name="edit" type="submit"><b>EDIT</b></button>
                            </form>
                                                            
                                </td>
                                <td>
                                    <form action="" method="post">
                                        <input type="hidden" name="nama_terminal" value="<?=$data2['nama_terminal']?>">
                                    <button class= "btn btn-secondary " name="hapus" type="submit"><b>HAPUS</b></button>
                                    </form>
                                </td>
                                <td>
                                    <form action="tampil-bus.php" method="post">
                                            <input type="hidden" name="nama_terminal" value="<?=$data2['nama_terminal']?>">
                                            <button class= "btn btn-secondary "  type="submit"><b>LIHAT TIKET</b></button>
                                    </form>
                                </td>
                                
                            </tr>                           
                <?php	
                           }	
                    }elseif(isset($_POST['semua']) || !isset($_POST['cari'])){
                                $nomor=1;
                                foreach ($c->tampil_terminal2() as $data2){
                            
                ?>
                                <tr>
                                                        <td><?=$nomor++?></td>
                                                        <td >
                                                            <img style="width:100px;hight:40px;" src="../assets/images/<?=$data2['gambar_terminal']; ?>">
                                                        </td>
                                                        <td><?=$data2['nama_terminal']?></td>
                                                        <td><?=$data2['kota_asal_bus']?></td>               
                                
                                <td>        
                                                            <form action="edit-terminal.php" method="post">
                                                            <input type="hidden" name="id_bus" value="<?=$data2['id_bus']?>">
                                                            <input type="hidden" name="nama_terminal" value="<?=$data2['nama_terminal']?>">
                                                            
                                                            <input type="hidden" name="cek" value="edit">

                                                                <button class= "btn btn-secondary " name="edit" type="submit"><b>EDIT</b></button>
                                                            
                                      </form> 
                                </td>
                                <td>
                                  <form action="" method="post">
                                        <input type="hidden" name="nama_terminal" value="<?=$data2['nama_terminal']?>">
                                    <button class= "btn btn-secondary " name="hapus" type="submit"><b>HAPUS</b></button>
                                    </form>
                                </td>
                                   
                                    <td>
                                    <form action="tampil-bus.php" method="post">
                                            <input type="hidden" name="nama_terminal" value="<?=$data2['nama_terminal']?>">
                                            <button class= "btn btn-secondary " type="submit"><b>LIHAT TIKET</b></button>
                                    </form>
                                    </td>
                            </tr>                           
                      <?php	
                                    }
                    }
                  ?>
                  </table>
                          

                  <?php	
                  $ban=new bandara();
                   if(isset($_POST['hapus'])){
                        $nama=$_POST['nama_terminal'];
                        $a=$ban->hapus_terminal($nama);
                    }
                    ?>
                    
            </div>     
            </div>
            <div  class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
                </div>
                <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3"></span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link"></a>
                            </li>
                            <li class="tm-paging-item  active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link"></a>
                            </li>
                            <li class="tm-paging-item  active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link"></a>
                            </li>
                            <li class="tm-paging-item  active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link"></a>
                            </li>
                        </ul>
                    </nav>
                </div>                
            </div>            
            <footer class="row tm-row">
                <hr class="col-12">
                <div class="col-md-6 col-12 tm-color-gray">
                    Design: <a rel="nofollow" target="_parent" href="https://templatemo.com" class="tm-external-link">TemplateMo</a>
                </div>
                <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                    Copyright 2020 ROYAL TRAVEL Company Co. Ltd.
                </div>
            </footer>
        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>