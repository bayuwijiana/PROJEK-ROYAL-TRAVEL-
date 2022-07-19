<?php	
session_start();

     if(!isset($_SESSION["login-usser"])){
        echo "<script>
                     alert('silahkan log in dahulu');
                     window.location ='index.php';
             </script>";
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="icon" href="assets/images/logo1.jpg" />
    
    <title>ROYAL TRAVEL </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/style2.css">

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav" >
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img  style=" height: 100px;width:100px;border-radius: 20px;" src="assets/images/y.png" alt="ROYAL TRAVEL"><img style=" height: 100px;width:100px;border-radius: 20px;" src="assets/images/y.png" alt="ROYAL TRAVEL"><b style="font-size: 30px;font-family: Georgia, 'Times New Roman', Times;" >ROYAL </b><b style="font-size: 35px;font-family: Georgia, 'Times New Roman', Times; color:rgb(218,165,32) " >TRAVEL</b>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active"><b> PROFIL</b></a></li>
              <li class="scroll-to-section"><a href="#clients"><b> LOG OUT</b></a></li>
              <li></a></li>
              
            </ul>    
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  
  <!-- ***** Header Area End ***** -->
  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>
 </div>
  
<!-- /////////////////////////////////////////////////////////////////////////// -->
  <div id="services" class="services section">
    
    <div class="container">
        <div class="row">
        
            <div class="col-lg-3">
                <div  class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="service-item first-service">
                        <div class="info1">
                            <a href="menu-usser.php"><img style="height:150px;width:150px;" src="assets/images/pesawat.png" alt=""></a>
                            <h2>Pesawat</h2>
                            <h4>Temukan penerbangan dengan harga terbaik.</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div  class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1.1s" data-wow-delay="1s">
                    <div class="service-item second-service">
                        <div class="info2">
                            <a href="menu-usser-kereta.php"><img style="height:150px;width:150px;" src="assets/images/kereta.jpg" alt=""></a>
                            <h2>Kereta</h2>
                            <h4>Paket Diskon Kereta Api Bikin Perjalanan Semakin Nyaman</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div  class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1.1s" data-wow-delay="1s">
                    <div class="service-item second-service">
                        <div class="info2">
                            <a href="menu-usser-bus.php"><img style="height:150px;width:150px;" src="assets/images/logobus.jpg" alt=""></a>
                            <h2>Bus</h2>
                            <h4>Paket Diskon Bus Bikin Perjalanan Semakin Nyaman</h4>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="col-lg-3">
                <div  class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay="1s">
                    <div class="service-item third-service">
                        <div class="info3">
                            <a href="#oke3"> <img style="height:150px;width:150px;" src="assets/images/tiket.webp" alt=""></a>
                            <h2>pemesanan Anda</h2>
                            
                            
                           

                            <h4>Cek waktu dan tempat pemesanan<a rel="nofollow" href="https://paypal.me/templatemo" target="_blank"> trends</a>. Thank you.</h4>
                        </div>
                         <img style="border-radius:12px; height:20px;width:100%;" src="assets/images/neonz.jpg" alt="">
                    </div>
                </div>
            </div>    
      </div>
    </div>
</div>

<!-- ////////////////////////////////////////////// -->
 
<div>
    <div class="container">
        <div class="row">
            <div class="s ection-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
              
              <br><br>
              <h3> <img src="assets/images/2.png" style="height:80px;width: 80px;"><b> Tiket Pesawat</b></h3>
                  <table class="table table-dark table-striped" style="font-size:20px;width: 100%;">
                        <thead style="height:100px;">
                            <td>No</td>
                            <td>Ussername pemesan</td>
                            <td>Bandara</td>
                            <td>Pesawat </td>
                            <td>Tujuan </td>
                            <td>Tanggal </td>
                            <td>Jam berangkat </td>
                            <td>Kelas Pesawat </td> 
                            <td>jumlah  penumpang</td>
                            <td>Total <br> harga</td> 
                            <td> Opsi</td>
                       </thead>            
                  
                  <?php	
                  include "read_home3.php";
                    $c= new tiket2();
                    $x2=$_SESSION['ussername_usser'];
                    $nomor=1;  
                    foreach ($c->tampil_tiket($x2) as $data2){

                  ?>
                  <tr>
                    <td><?=$nomor++ 	?></td>
                    <td><?= 	$data2['ussername_pemesan']?></td>
                    <td><?= 	$data2['nama_bandara']?></td>
                    <td><?= 	$data2['nama_pesawat']?></td>
                    <td><?= 	$data2['kota_tujuan_pesawat']?></td>
                    <td><?= 	$data2['tanggal_berangkat_pesawat']?></td>
                    <td><?= 	$data2['jam_berangkat_pesawat']?></td>
                    <td><?= 	$data2['kelas_pesawat']?></td>
                    <td><?= 	$data2['jumlah_penumpang']?></td>
                    <td><?= 	$data2['total_harga']?></td>
                    
                    <td>
                                                <form action="" method="post">

                                                  
                                                  <input type="hidden" name="id_pemesanan_pesawat" value="<?=$data2['id_pemesanan_pesawat']?>">

                                                  <input type="hidden" name="jumlah_penumpang" value="<?=$data2['jumlah_penumpang']?>">

                                                  <input type="hidden" name="id_pesawat" value="<?=$data2['id_pesawat']?>">

                                                  <input type="hidden" name="cek" value="pesawat">
                                                    <button style="border-radius:20px;width:100px" name="batal" type="submit"><b>Batal</b></button>
                                                </form> <br>
                                                

                    </td>
                  </tr>
                  <?php	
                  if($data2['status_pemesanan']!="dibayar"){
                  ?>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td> 
                      <td></td>
                     <td></td> 
                        <form action="" method="post">
                          <td>

                                                <input type="hidden" name="total_harga" value="<?= 	$data2['total_harga']?> ">
                                                  
                                                <input type="hidden" name="id_pemesanan" value="<?= 	$data2['id_pemesanan_pesawat']?> ">

                                                <input type="hidden" name="pemesan" value="<?= $data2['ussername_pemesan']?>
                                                ">

                                                <input type="hidden" name="cek" value="pesawat">  
                                              
                                                <input type="hidden" name="ussername" value="<?= 	$data2['ussername_pemeasan']?>">
                                                <button style="border-radius:20px; width:100px" ; name ="pay" type="submit" class="btn btn-primary">
                                               Royal Pay
                                              </button>
                                            </td>
                        </form>
                      
                      
                        <form action="" method="post">
                                                <td><input type="text" name="uang_bayar" placeholder="Masukan uang anda" required></td> 
                                                <input type="hidden" name="total_harga" value="<?= 	$data2['total_harga']?> ">
                                                  
                                                <input type="hidden" name="id_pemesanan" value="<?= 	$data2['id_pemesanan_pesawat']?> ">
                                                <input type="hidden" name="pemesan" value="<?= $data2['ussername_pemesan']?>
                                                ">

                                                <input type="hidden" name="cek" value="pesawat">  
                                              <td>
                                                <button style="border-radius:20px; width:100px" ; name ="bayar" type="submit" class="btn btn-primary">
                                                Bayar
                                              </button>
                                            </td>
                                            <td></td>
                                              </form>
                  </tr>
                  <?php
                    }	
                    }

                  ?>

            </table>
            
             <br><br>
              <h3> <img src="assets/images/3.jpg" style="height:80px;width: 80px;"><b> Tiket Kereta</b></h3>
                <table class="table table-dark table-striped" style="font-size:20px;width: 100%;">
                        <thead style="height:80px;">
                            <td>No</td>
                            <td>Ussername pemesan</td>
                            <td>Stasiun</td>
                            <td>Kereta</td>
                            <td>Tujuan</td>
                            <td>Tanggal</td>
                            <td>Jam berangkat</td>
                            <td>Kelas Kereta</td>
                            <td>jumlah <br> penumpang</td>
                            <td>Total <br> harga</td>
                            <td>Opsi</td>
                       </thead>            
                  
                  <?php	
                  
                    $d= new tiket2();
                    $nomor=1;  
                    foreach ($d->tampil_tiket2($x2) as $data2){

                  ?>
                  <tr>
                    <td><?=$nomor++ 	?></td>
                    <td><?= 	$data2['ussername_pemesan']?></td>
                    <td><?= 	$data2['nama_stasiun']?></td>
                    <td><?= 	$data2['nama_kereta']?></td>
                    <td><?= 	$data2['kota_tujuan_kereta']?></td>
                    <td><?= 	$data2['tanggal_berangkat_kereta']?></td>
                    <td><?= 	$data2['jam_berangkat_kereta']?></td>
                    <td><?= 	$data2['kelas_kereta']?></td>
                    <td><?= 	$data2['jumlah_penumpang']?></td>
                    <td><?= 	$data2['total_harga']?></td>
                    
                    <td>
                                                <form action="" method="post">

                                                  
                                                
                                                  <input type="hidden" name="id_kereta" value="<?=$data2['id_kereta']?>">

                                                  <input type="hidden" name="jumlah_penumpang" value="<?=$data2['jumlah_penumpang']?>">

                                                  <input type="hidden" name="id_pemesanan_kereta" value="<?=$data2['id_pemesanan_kereta']?>">
                                                  <input type="hidden" name="cek" value="kereta">
                                                    <button style="border-radius:20px;width:100px" name="batal" type="submit"><b>Batal</b></button>
                                                </form>
                    

                    </td>

                    
                  </tr>
                  <?php	
                  if($data2['status_pemesanan']!="dibayar"){
                  ?>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <form action="" method="post">
                          <td>

                                                <input type="hidden" name="total_harga" value="<?= 	$data2['total_harga']?> ">
                                                  
                                                <input type="hidden" name="id_pemesanan" value="<?= 	$data2['id_pemesanan_kereta']?> ">

                                                <input type="hidden" name="pemesan" value="<?= $data2['ussername_pemesan']?>
                                                ">

                                                <input type="hidden" name="cek" value="kereta">  
                                              
                                                <input type="hidden" name="ussername" value="<?= 	$data2['ussername_pemeasan']?>">
                                                <button style="border-radius:20px; width:100px" ; name ="pay" type="submit" class="btn btn-primary">
                                               Royal Pay
                                              </button>
                                            </td>
                        </form>
                        <form action="" method="post">
                                                <td><input type="text" name="uang_bayar" placeholder="Masukan uang anda" required></td> 
                                                <input type="hidden" name="total_harga" value="<?= 	$data2['total_harga']?> ">
                                                  
                                                <input type="hidden" name="id_pemesanan" value="<?= 	$data2['id_pemesanan_kereta']?> ">
                                                <input type="hidden" name="pemesan" value="<?= $data2['ussername_pemesan']?>
                                                ">

                                                <input type="hidden" name="cek" value="kereta">  
                                              <td>
                                                <button style="border-radius:20px; width:100px" ; name ="bayar" type="submit" class="btn btn-primary">
                                                Bayar
                                              </button>
                                            </td>
                                              </form>
                  </tr>
                  <?php
                    }	
                  
                  	}
                    ?>
                </table>
                <br><br>
              <h3> <img src="assets/images/4.jpg" style="height:75px;width: 75px;"><b> Tiket Bus</b></h3>  <br>
                <table class="table table-dark table-striped" style="font-size:20px;width: 100%;">
                        <thead style="height:80px;">
                            <td>No</td>
                            <td>Ussername pemesan</td>
                            <td>Terminal</td>
                            <td>Bus</td>
                            <td>Tujuan</td>
                            <td>Tanggal</td>
                            <td>Jam berangkat</td>
                            <td>jumlah <br>Penumpang

                            </td>
                            <td>Total <br> harga</td>
                            <td></td>
                            <td>Opsi</td>
                            
                       </thead>            
                  
                  <?php	
                  
                    $d= new tiket2();
                    $nomor=1;  
                    foreach ($d->tampil_tiket3($x2) as $data2){

                  ?>
                  <tr>
                    <td><?=$nomor++ 	?></td>
                    <td><?= 	$data2['ussername_pemesan']?></td>
                    <td><?= 	$data2['nama_terminal']?></td>
                    <td><?= 	$data2['nama_bus']?></td>
                    <td><?= 	$data2['kota_tujuan_bus']?></td>
                    <td><?= 	$data2['tanggal_berangkat_bus']?></td>
                    <td><?= 	$data2['jam_berangkat_bus']?></td>
                    <td><?= 	$data2['jumlah_penumpang']?></td>
                    <td><?= 	$data2['total_harga']?></td>
                    <td></td>
                    
                    <td>
                                                <form action="" method="post">

                                                  
                                                
                                                  <input type="hidden" name="id_bus" value="<?=$data2['id_bus']?>">

                                                  <input type="hidden" name="jumlah_penumpang" value="<?=$data2['jumlah_penumpang']?>">

                                                  <input type="hidden" name="id_pemesanan_bus" value="<?=$data2['id_pemesanan_bus']?>">
                                                  <input type="hidden" name="cek" value="bus">
                                                    <button style="border-radius:20px;width:100px" name="batal" type="submit"><b>Batal</b></button>
                                                </form>
                    

                    </td>
                    
                  </tr>
                  <?php	
                  if($data2['status_pemesanan']!="dibayar"){
                  ?>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <form action="" method="post">
                          <td>

                                                <input type="hidden" name="total_harga" value="<?= 	$data2['total_harga']?> ">
                                                  
                                                <input type="hidden" name="id_pemesanan" value="<?= 	$data2['id_pemesanan_bus']?> ">

                                                <input type="hidden" name="pemesan" value="<?= $data2['ussername_pemesan']?>
                                                ">

                                                <input type="hidden" name="cek" value="bus">  
                                              
                                                <input type="hidden" name="ussername" value="<?= 	$data2['ussername_pemeasan']?>">
                                                <button style="border-radius:20px; width:100px" ; name ="pay" type="submit" class="btn btn-primary">
                                               Royal Pay
                                              </button>
                                            </td>
                                          </form>
                                          
                                        <form action="" method="post">
                                                <td><input type="text" name="uang_bayar" placeholder="Masukan uang anda" required></td> 
                                                <input type="hidden" name="total_harga" value="<?= 	$data2['total_harga']?> ">
                                                  
                                                <input type="hidden" name="id_pemesanan" value="<?= 	$data2['id_pemesanan_bus']?> ">
                                                <input type="hidden" name="pemesan" value="<?= $data2['ussername_pemesan']?>
                                                ">

                                                <input type="hidden" name="cek" value="bus">  
                                              <td>
                                                <button style="border-radius:20px; width:100px" ; name ="bayar" type="submit" class="btn btn-primary">
                                                Bayar
                                              </button>
                                            </td>
                                              </form>
                  </tr>
                  <?php
                    }	
                  
                  
                    }
                  ?>
                </table>
            
                <?php	
                    
            
            
                    if(isset($_POST['batal'])){
                      
                      $cek=$_POST['cek'];

                      if($cek=="pesawat"){
                          $id=$_POST['id_pesawat'];
                          $jumlah=$_POST['jumlah_penumpang'];
                          $idp=$_POST['id_pemesanan_pesawat'];
                      }elseif($cek=="kereta"){
                          
                          $id=$_POST['id_kereta'];
                          $jumlah=$_POST['jumlah_penumpang'];
                          $idp=$_POST['id_pemesanan_kereta'];
                      }elseif($cek=="bus"){
                          
                          $id=$_POST['id_bus'];
                          $jumlah=$_POST['jumlah_penumpang'];
                          $idp=$_POST['id_pemesanan_bus'];
                      }


                      $x=new tiket2();
                      $y=$x->batal($idp,$cek,$id,$jumlah);
                      
                    }

                  ?>
            </table>
                    <?php	
            
                   if(isset($_POST['bayar'])){
                      $uang_bayar=$_POST['uang_bayar'];
                      $id_pemesanan=$_POST['id_pemesanan'];
                      $total_harga=$_POST['total_harga'];
                      $pemesan=$_POST['pemesan'];
                      $cek=$_POST['cek'];
                      

                      if($cek=="pesawat"){
                        $by=new bayar();
                        $by=$by->bayar_pesawat($uang_bayar,$total_harga,$id_pemesanan,$pemesan);
                      }else if($cek=="kereta"){
                        $by=new bayar();
                        $by=$by->bayar_kereta($uang_bayar,$total_harga,$id_pemesanan,$pemesan);
                      }else if($cek=="bus"){
                        $by=new bayar();
                        $by=$by->bayar_bus($uang_bayar,$total_harga,$id_pemesanan,$pemesan);
                      }
                   } ?>
                   
                   <?php	
                   
                   if(isset($_POST['pay'])){
                      
                      $id_pemesanan=$_POST['id_pemesanan'];
                      $total_harga=$_POST['total_harga'];
                      $pemesan=$_POST['pemesan'];
                      $cek=$_POST['cek'];
                      

                      if($cek=="bus"){

                        $by=new bayar();
                        $by=$by->bayar_bus2x($total_harga,$id_pemesanan,$pemesan);
                      
                      }else{
                        $by=new bayar();
                        $by=$by->bayar_pesawat2($cek,$total_harga,$id_pemesanan,$pemesan);
                      }
                    }
                   ?>

                    
                    <hr><br><br><br>
                    <h2><b>Kode boking pesawat</b></h2>
                    <table style="font-size:20px;width: 60%;border:1px solid blue;background-image: url(assets/images/pro-table-bottom.png);">
                  <?php	
                    $c= new tiket2();
                    $nomor=0;  
                    foreach ($c->tampil_boking($x2) as $data2){
                  ?>    <hr>
                        <thead style="background-image: url(assets/images/biru.jpg);color :white;">
                              <td>
                                <img src="assets/images/2.png" style="height:50px;width: 50px;">
                                KODE BOKING
                              </td>
                              <td></td>
                              <td>ROYAL TRAVEL</td>
                        </thead>
                        <tr>  
                              <td>nama </td>
                              <td>:</td>
                              <td><?=$data2['ussername_pemesan']?></td>
                        </tr>
                        <tr>  
                              <td>Bandara</td>
                              <td>:</td>
                              <td><?=$data2['nama_bandara']?></td>
                        </tr>
                        <tr>  
                              <td>Pesawat</td>
                              <td>:</td>
                              <td><?=$data2['nama_pesawat']?></td>
                        </tr>
                        <tr>  
                              <td>kode boking</td>
                              <td>:</td>
                              <td><?=$data2['kode_boking']?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                              <form action="" method="post">
                                  <input type="hidden" name="id" value="<?=$data2['id_pemesanan_pesawat']?>">  
                                  <input type="hidden" name="cek" value="pesawat">  
                                  <button class="btn btn-secondary" type="submit" name="terpakai">terpakai</button>
                              </form>
                            </td>
                        </tr>
                        <?php	
                          }
                        ?>
                        </table>
                        <hr>


                    <hr><br>
                    <h2><b>Kode boking kereta</b></h2>
                    <table style="font-size:20px;width: 60%;border:1px solid blue;background-image: url(assets/images/pro-table-bottom.png);">
                  <?php	
                    $c= new tiket2();
                    $nomor=0;  
                    foreach ($c->tampil_boking2($x2) as $data2){
                  ?>    <hr>
                        <thead style="background-image: url(assets/images/biru.jpg);color :white;">
                              <td>
                                <img src="assets/images/3.jpg" style="height:50px;width: 50px;">
                                KODE BOKING
                              </td>
                              <td></td>
                              <td>ROYAL TRAVEL</td>
                        </thead>
                        <tr>  
                              <td>nama </td>
                              <td>:</td>
                              <td><?=$data2['ussername_pemesan']?></td>
                        </tr>
                        <tr>  
                              <td>stasiun</td>
                              <td>:</td>
                              <td><?=$data2['nama_stasiun']?></td>
                        </tr>
                        <tr>  
                              <td>kereta</td>
                              <td>:</td>
                              <td><?=$data2['nama_kereta']?></td>
                        </tr>
                        <tr>  
                              <td>kode boking</td>
                              <td>:</td>
                              <td><?=$data2['kode_boking']?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                              <form action="" method="post">
                                  <input type="hidden" name="id" value="<?=$data2['id_pemesanan_kereta']?>">  
                                  <input type="hidden" name="cek" value="kereta">  
                                  <button class="btn btn-secondary" type="submit" name="terpakai">terpakai</button>
                              </form>
                            </td>
                        </tr>

                        <?php	
                          }
                        ?>
                        </table>
                        <hr>

                    <hr><br>
                    <h2><b>Kode boking bus</b></h2>
                    <table style="font-size:20px;width: 60%;border:1px solid blue;background-image: url(assets/images/pro-table-bottom.png);">
                  <?php	
                    $c= new tiket2();
                    $nomor=0;  
                    foreach ($c->tampil_boking3($x2) as $data2){
                  ?>    <hr>
                        <thead style="background-image: url(assets/images/biru.jpg);color :white;">
                              <td>
                                <img src="assets/images/4.jpg" style="height:50px;width: 50px;">
                                KODE BOKING
                              </td>
                              <td></td>
                              <td>ROYAL TRAVEL</td>
                        </thead>
                        <tr>  
                              <td>nama </td>
                              <td>:</td>
                              <td><?=$data2['ussername_pemesan']?></td>
                        </tr>
                        <tr>  
                              <td>terminal</td>
                              <td>:</td>
                              <td><?=$data2['nama_terminal']?></td>
                        </tr>
                        <tr>  
                              <td>bus</td>
                              <td>:</td>
                              <td><?=$data2['nama_bus']?></td>
                        </tr>
                        <tr>  
                              <td>kode boking</td>
                              <td>:</td>
                              <td><?=$data2['kode_boking']?></td>
                        </tr>
                                                <tr>
                            <td></td>
                            <td></td>
                            <td>
                              <form action="" method="post">
                                  <input type="hidden" name="id" value="<?=$data2['id_pemesanan_bus']?>">  
                                  <input type="hidden" name="cek" value="bus">  
                                  <button class="btn btn-secondary" type="submit" name="terpakai">terpakai</button>
                              </form>
                            </td>
                        </tr>

                        <?php	
                          }
                        ?>
                        </table>
                        <hr>
                        


            </div>
        </div>
    </div>
</div>
                    <?php	
                        if(isset($_POST['terpakai'])){
                          $cek=$_POST['cek'];
                          $cx=new tiket2();

                          if($cek="pesawat"){
                              $cx=$cx->hapus_boking1($_POST['id']);
                          }
                          if($cek="kereta"){
                                $cx=new tiket3();
                                $cx=$cx->hapus_boking2($_POST['id']);
                          }
                          if($cek="bus"){
                                $cx=new tiket3();
                                $cx=$cx->hapus_boking3($_POST['id']);
                          }


                            
                            
                        }
                    ?>

<div>
    <div class="container">
        <div class="row">
            <div class="s ection-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">

            </div>
        </div>
    </div>
</div>

<div id="services" class="services section">
  <div id="clients" class="the-clients">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Check What <em>The Clients Say</em> About Our App Dev</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <h5>Bandingkan Tiket Promo Termurah disini dengan teknologi Royal Travel®,Tiket Pesawat
                Harga Terbaik, Check-in Mudah. Cara Pintar Pesan Tiket Pesawat.</h5>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid"> 
                <div class="col-lg-5">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/quote.png" alt="">
                                <p>“Teknologi SSL dari RapidSSL dengan Sertifikat yang terotentikasi menjamin privasi dan keamanan transaksi online Anda. Konfirmasi instan dan e-tiket atau voucher dikirim langsung ke email Anda.@royal travel.com”</p>
                              </div>
                              <div class="down-content">
                                <img  style=" height: 100px;width:100px;border-radius: 20px;" src="assets/images/y.png" alt="ROYAL TRAVEL">
                                <div class="right-content">
                                  <h4>David Martino</h4>
                                  <span>Royal Travel</span>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  



  <footer id="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Join our mailing list to receive the news &amp; latest trends</h4>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-3">
          <form id="search" action="#" method="GET">
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <fieldset>
                  <input type="address" name="address" class="email" placeholder="Email Address..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6 col-sm-6">
                <fieldset>
                  <button type="submit" class="main-button">Subscribe Now <i class="fa fa-angle-right"></i></button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="footer-widget">
            <b class="fa-3x">
                 <i class="fas fa-stroopwafel fa-spin"></i>
            </b>
            <h4>Contact Us</h4>
            
            <p>Bayu Wijiana - RJ, 22795-008 Bandung , Indonesian .</p>
            <p><a href="#">010-020-0340</a></p>
            <p><a href="#">infoRoyaltravel@company.co</a></p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>About Us</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Pricing</a></li>
            </ul>
            <ul>
              <li><a href="#">About</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Pricing</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Free Apps</a></li>
              <li><a href="#">App Engine</a></li>
              <li><a href="#">Programming</a></li>
              <li><a href="#">Development</a></li>
              <li><a href="#">App News</a></li>
            </ul>
            <ul>
              <li><a href="#">App Dev Team</a></li>
              <li><a href="#">Digital Web</a></li>
              <li><a href="#">Normal Apps</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>ROYAL TRAVEL</h4>
            <div class="logo">
              <img src="assets/images/y.png" alt="">
              <img src="assets/images/y.png" alt="">
              
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright © 2022 ROYAL TRAVEL All Rights Reserved. 
          <br>Design : <a href="https://templatemo.com/" target="_blank" title="css templates">@bayu_wijiana</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
<

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>