
<?php	

session_start();
 if(!isset( $_SESSION["ussername_admin-pesawat"] )){
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
                    <h1>ADMIN PESAWAT</h1>
                </center>
            </div>
            <nav class="tm-nav" id="tm-nav"> 
                <ul>
                    <li class="tm-nav-item">
                        <img style=" margin-left: 20px;height: 50px;width:50px;border-radius: 50%;" src="../assets/images/oke3.png" alt="ROYAL TRAVEL">
                        <button class="btn btn-secondary" onclick="myFunction()">
                                UBAH MODE
                        </button>
                    </li>
            <li class="tm-nav-item"><a href="menu-admin-pesawat.php" class="tm-nav-link">
                         <img style=" margin-right: 10px;height: 40px;width:40px;border-radius: 10px;" src="../assets/images/oke5.jpg" alt="ROYAL TRAVEL">
                        DATA BANDARA 
                    </a></li>
                    
                    <li class="tm-nav-item"><a href="" class="tm-nav-link">
                        <img style=" margin-right: 10px;height: 40px;width:40px;border-radius: 10px;" src="../assets/images/PEMESANAN.jpg" alt="ROYAL TRAVEL">
                        DATA PEMESANAN
                    </a></li>
                    
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
    <div >
        <main class="tm-main">
            
<hr class="tm-hr-primary tm-mb-55">
            <H1> <b> DATA PEMESANAN</b></H1>
            <div class="row tm-row">
                    <form action="" method="post" >
                        <button style="font-size:26px;width:200px;" class="btn btn-primary" name="semua">SEMUA DATA</button>
                     </form><br><br>
                    <form method="post" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="nama" type="text" placeholder="Search Pemesan/Bandara/Tujuan/Harga" aria-label="Search">
                        <input type="hidden" name="cek" value="cari">
                        <button class="tm-search-button" name="cari5" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>     

                    </form> 
                    <h2><b>DAFTAR TIKET</b></h2>
                  <table class="table table-dark table-striped" style="font-size:20px;width: 80%;" >
                        <thead >
                            <td>No</td>
                            <td>Pemesan</td>
                            <td>Bandara</td>
                            <td>Pesawat</td>
                            <td>jumlah <br> penumpang</td>
                            <td>Tujuan</td>
                            <td>Total harga</td>
                            <td>Status</td>
                            <td>opsi</td>
                       </thead>            
                  
                  <?php	
                  include "read_admin.php";
                    
                    $c= new tiket();
                    if(isset($_POST['cari5'])){
                        $nama=$_POST['nama'];
                            $nomor=1;
                            foreach ($c->tampil_pesawat($nama) as $data2){
                            
                ?>
                                <tr>
                                                        <td><?=$nomor++?></td>
                                                        <td><?=$data2['ussername_pemesan']?></td>
                                                        <td><?=$data2['nama_bandara']?></td>               
                                                        <td><?=$data2['nama_pesawat']?></td>   
                                                        <td><?=$data2['jumlah_penumpang']?></td> 
                                                        <td><?=$data2['kota_tujuan_pesawat']?></td>
                                                     
                                                        <td><?=$data2['total_harga']?></td> 
                                                        <td><?=$data2['status_pemesanan']?></td> 
                                                        
                                                     <td>
                                                            <form action="" method="post">
                                                            <input type="hidden" name="id_pesawat" value="<?=$data2['id_pesawat']?>">
                                                            <input type="hidden" name="id" value="<?=$data2['id_pemesanan_pesawat']?>">
                                                            
                                                            <input type="hidden" name="nama_bandara" value="<?=$data2['nama_bandara']?>">


                                                            
                                </td>
                                <td>
                                    <button class= "btn btn-secondary " name="hapus" type="submit"><b>HAPUS</b></button>
                                    </form>
                                </td>
                                
                                
                            </tr>                           
                <?php	
                           }	
                    }elseif(isset($_POST['semua']) || !isset($_POST['cari'])){
                                $nomor=1;
                                foreach ($c->tampil_pesawat2() as $data2){
                            
                ?><tr>
                                                        <td><?=$nomor++?></td>
                                                        <td><?=$data2['ussername_pemesan']?></td>
                                                        <td><?=$data2['nama_bandara']?></td>               
                                                        <td><?=$data2['nama_pesawat']?></td>   
                                                        <td><?=$data2['jumlah_penumpang']?></td> 
                                                        <td><?=$data2['kota_tujuan_pesawat']?></td>
                                                     
                                                        <td><?=$data2['total_harga']?></td> 
                                                        <td><?=$data2['status_pemesanan']?></td>  
                                                        
                                <td>
                                                            <form action="" method="post">
                                                            <input type="hidden" name="id_pesawat" value="<?=$data2['id_pesawat']?>">

                                                            <input type="hidden" name="id" value="<?=$data2['id_pemesanan_pesawat']?>">
                                                            
                                                            <input type="hidden" name="nama_bandara" value="<?=$data2['nama_bandara']?>">
                                                            
                                </td>
                                <td>
                                    <button class= "btn btn-secondary " name="hapus" type="submit"><b>HAPUS</b></button>
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
                        $id=$_POST['id'];
                        $a=$ban->hapus_tiketz($id);
                    }
                    ?>
                    
            </div>     
            </div>
            <div  class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20"></a>
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next"></a>
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