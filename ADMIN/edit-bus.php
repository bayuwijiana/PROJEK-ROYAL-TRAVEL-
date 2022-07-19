<?php	
error_reporting (0);


session_start();
 if(!isset( $_SESSION["ussername_admin-bus"] )){
        echo "<script>
                     alert('silahkan log in dahulu');
                    window.location ='../index.php';
             </script>";
    }
 
include 'read_admin.php';
$id=$_POST['id'];    
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
                    </li>
                    <li class="tm-nav-item"><a href="menu-admin-bus.php" class="tm-nav-link">
                         <img style=" margin-right: 10px;height: 40px;width:40px;border-radius: 10px;" src="../assets/images/oke5.jpg" alt="ROYAL TRAVEL">
                        DATA BUS 
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
            
                            
                                $c= new tampil_admin();
                                $nomor=1;

                                foreach ($c->tampil5($id) as $data2){
                                

                    
                    ?>              
                    
                                <h2><b>EDIT TIKET </b></h2>
                    <hr class="tm-hr-primary tm-mb-55">
                                               <table style="width:100%">
                                                     <form action="" method="post">
                                                        <tr>    
                                                            
                                                            <input type="hidden" name="j" value="<?=$data2['id_bus']?>">
                                                           <td >
                                                                <img style="width:100px;hight:40px ;" src="../assets/images/<?=$data2['gambar_bus']; ?>">
                                                           </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Bus
                                                            </td>
                                                            <td>
                                            <input type="text" name="k" value="<?=$data2['nama_bus']?>"required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Kota Asal
                                                            </td>
                                                            <td>
                                                                <input type="text" name="l" value="<?=$data2['kota_asal_bus']?>" required>
                                                                
                                                            </td>               
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Tujuan
                                                            </td>
                                                            <td>
                                            <input type="text" name="m" value="<?=$data2['kota_tujuan_bus']?>"required>
                                                                
                                                            </td>               
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Harga
                                                            </td>
                                                            <td>
                                                                <input type="text" name="n" value="<?=$data2['harga']?>"required>
                                                                
                                                            </td>               
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                jam
                                                            </td>
                                                            <td>
                                                                <input type="time" name="o" value="<?=$data2['jam_berangkat_bus']?>"required>
                                                                
                                                            </td>               
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                jumlah
                                                            </td>
                                                            <td>
                                            <input type="text" name="p" value="<?=$data2['jumlah_tiket']?>"required>
                                                                
                                                            </td>               
                                                        </tr>
                                                        
                                                             <td>
                                                                <button class= "btn btn-secondary " name="edit2" type="submit"><b>EDIT</b></button>                       
                                                            </td>
                                                        </tr>
                    <?php	
                                }
                                if(isset($_POST['edit2'])){
                                    $j=$_POST['j'];
                                    $k=$_POST['k'];
                                    $l=$_POST['l'];
                                    $m=$_POST['m'];
                                    $n=$_POST['n'];
                                    $o=$_POST['o'];
                                    $p=$_POST['p'];
                                    
                                    
                                    
                                   
                                    
                                    $e=new bandara();
                                    $e=$e->edit3bus($j,$k,$l,$m,$n,$o,$p);
                                }
                                
                  ?>
                                                    </table>



            <div  class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20"></a>
                   
                </div>
                <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3"></span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link"></a>
                            </li>
                            <li class="tm-paging-item active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link"></a>
                            </li>
                            <li class="tm-paging-item active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link"></a>
                            </li>
                            <li class="tm-paging-item active">
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