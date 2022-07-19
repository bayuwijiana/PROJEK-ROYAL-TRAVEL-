<?php
include "read_admin.php";
 $a=new PESAN();
  if(isset($_POST['save'])){

                    $file=$_FILES['file']['name'];
                    $files=$_FILES['file']['tmp_name'];
                    move_uploaded_file($files,"../assets/images/".$file);

                if($a->prof($file,$_POST['nama'],$_POST['nik'],$_POST['telepon'],$_POST['alamat'])){
                    echo "<script>
                     alert('BERHASIL');
                     </script>";
                }
              

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
               
            </div>
             <li class="tm-nav-item"><a href="../menu-usser.php" class="tm-nav-link">
                         <img style=" margin-right: 10px;height: 40px;width:40px;border-radius: 10px;" src="../assets/images/oke5.jpg" alt="ROYAL TRAVEL">
                    <h1>HOME</h1>
                    </a></li>
             
            <nav class="tm-nav" id="tm-nav"> 
                                 
                   
            </nav>
            <div class="tm-mb-65">
                <a rel="nofollow" href="" class="tm-social-link">
                    
                </a>
                <a rel="nofollow" href="" class="tm-social-link">
                    
                </a>
                <a rel="nofollow" href="" class="tm-social-link">
                    
                </a>
                <a rel="nofollow" href="" class="tm-social-link">
                    
                </a>
                
            </div>
            
        </div>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
          
<hr class="tm-hr-primary tm-mb-55">

            
    <?php	
             
                $nama = $_GET['user'];
      
            foreach( $a->profil($nama) as $key ){
            ?>

            <form action="" method="post" enctype="multipart/form-data">

            <table class="table table-dark" style="border-radius:20px;">
                <tr style="height:100px">
                    <td style="padding-top:20px" > FOTO</td>
                    
                    <td style="padding-top:20px" >
                        <input name="file"  type="file" value="<?= $key['foto']?>" required>
                    </td>
                   
                </tr>
                <tr style="height:100px">
                    <td style="padding-top:20px" > NAMA</td>

                    <td style="padding-top:20px" ><input type="text" name="nama"  value="<?= 	$key['ussername_usser']?>"></td>
                   
                </tr>
                <tr>
                    <td> No KTP</td>               
                    <td style="padding-top:20px" ><input type="text" name="nik" 
                    value=" <?= 	$key['nik']?>"></td>     
                </tr>
                <tr>
                    <td> No Telepon</td>
                    
                    <td style="padding-top:20px" ><input type="text" name="telepon" value=" <?= 	$key['no_telepon_usser']?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td style="padding-top:20px" ><input type="text" name="alamat" value=" <?= 	$key['alamat']?>"></td>
                </tr>
                <button class="btn btn-secondary" name="save">
                    SAVE
                </button>

                 <?php	
            }
            
                ?>
                </form>   
            </table>
            <?php	
            
            // function upload() {

            //         $namaFile = $_FILES['gambar']['name'];
            //         $ukuranFile = $_FILES['gambar']['size'];
            //         $err = $_FILES['gambar']['error'];
            //         $tmpName = $_FILES['gambar']['tmp_name'];
            //         // cek apakah tidak ada gambar yang diupload
            //             if( $error === 4) {

            //             echo "<script>

            //             alert('pilih gambar terlebih dahulu!');

            //             </script>";
            //             }

            //            move_uploaded_file($tmpName,'assets/images/'.$namaFile);
            //            return $namaFile;

            // }











          
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