

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
            include "read_admin.php";

            $nama=$_POST['nama'];

            $a=new PESAN();
            foreach( $a->profil($nama) as $key ){
            ?>
            <H1> <b> PROFIL</b></H1>
            <div class="mb-3 mx-auto tm-site-logo">
                     <img style=" height: 150px;width:150px;border-radius: 20px;" src="../assets/images/<?=$key['foto']?>">
                </div>   

           
           <form action="" method="post">
            <table class="table table-dark" style="border-radius:20px;">

                <tr style="height:100px">
                    <td style="padding-top:20px" > NAMA</td>
                    <td style="padding-top:20px" ><?= 	$key['ussername_usser']?></td>
                   
                </tr>
                <tr>
                    <td> No KTP</td>                    
                    <td><?= 	$key['nik']?></td>
                </tr>
                <tr>
                    <td> No Telepon</td>
                   <td><?= 	$key['no_telepon_usser']?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><?= 	$key['alamat']?></td>
                </tr>
               <a href="edit-profil.php?user=<?=$key['ussername_usser']?>"> EDIT</a>
                   
       
                </form>
            </table>
             <?php	
            }
                ?>

            <br><br>







         
                    
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