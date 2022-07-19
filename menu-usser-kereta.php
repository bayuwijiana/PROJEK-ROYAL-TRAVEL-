 <?php	
 session_start();
     if(!isset($_SESSION["login-usser"])){
        echo "<script>
                     alert('silahkan log in dahulu');
                     window.location ='index.php';
             </script>";
    }
      include "read_home.php";
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
    <link rel="stylesheet" href="assets/css/style2.css">
    
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
              <li class="scroll-to-section"></li>
              <li class="scroll-to-section"></li>
              <li></li>
              
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
                            <a href="#oke2"><img style="height:150px;width:150px;" src="assets/images/kereta.jpg" alt=""></a>
                            <h2>Kereta</h2>
                            <h4>Paket Diskon Kereta Api Bikin Perjalanan Semakin Nyaman</h4>
                            
                        </div>
                        <img style="border-radius:12px; height:20px;width:100%;" src="assets/images/neonx.jpg" alt="">
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
                            <a href="menu-usser-tiket.php"> <img style="height:150px;width:150px;" src="assets/images/tiket.webp" alt=""></a>
                            <h2>pemesanan Anda</h2>
                            <h4>Cek waktu dan tempat pemesanan<a rel="nofollow" href="https://paypal.me/templatemo" target="_blank"> trends</a>. Thank you.</h4>
                        </div>
                    </div>
                </div>
            </div>    
      </div>
    </div>
</div>
<div id="services" class="services section">
    <div class="container">
      <div class="row" >
        <div class="col-lg-8 offset-lg-2" >
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4> <b b style="color:rgb(218,165,32) ; font-family: Georgia;">ROYAL TRAVEL</b>  Fitur <em>&amp; Layanan Terbaik</em>  Untuk Anda batas atas</h4>
            
            <img src="assets/images/heading-line-dec.png" alt="">
          </div>
        </div>
      </div>

    <div id="oke2" >
        <div style="background-image:url(assets/images/neonc.jpg); height:50px;width:250px "></div>
        <h1 
        style= " font-size:50px ;font-weight:bold;font-family: Georgia, 'Times New Roman', Times;"><img style="height:200px;width:200px;" src="assets/images/penerbangan.jpg" >LINTAS KERETA<b style="font-family: Georgia, 'Times New Roman', Times; color:rgb(218,165,32) " > ROYAL</b>TRAVEL</h1>
        <center>
         <div style="background-color:gray; height:10px;width:95%;border-radius:10px; "></div>
         </center>
       <h2><b style="margin-left:30px;">DAFTAR STASIUN</b></h2>
    </div>
    
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid">
                  <!-- <form action="" method="post">
                    <button type="submit" name="panduan" class="btn btn-outline-success" style="margin-right:10px;">panduan</button> 
                  </form> -->
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Panduan
                  </button>

                
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      
                    </li>
                  </ul>
                  <form action="" method="post"  class="d-flex" style="width: 60%; ">
                    
                  <input class="form-control me-2" type="search" name="cari2" placeholder="cari nama stasiun" aria-label="Search"; required>

                    <button class="btn btn-outline-success" name="cari" type="submit" >Search</button>
                  </form>
                </div>
              </div>
            </nav>

    </div>
</div>




<!-- //////////////////////////////////////////////////////////////////////////// -->
<div style="margin-top:100px">
    <div class="container">
        <div class="row">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                  <center>
                      <?php	
                          if(isset($_POST['cari'])){ 
                      ?>      
                              
                              <table class="table table-dark table-striped" style="font-size:23px;width: 95%;">
                                  <thead style="height:100px;">
                                        <td>No</td>
                                        <td></td>
                                        <td>Nama stasiun</td>
                                        <td>Kota</td>
                                        <td>Opsi</td>
                                  </thead>
                      <?php	
                                  $z=$_POST['cari2']; 
                                  
                                  $b= new a();
                                  $nomor=1;  
                                  if(mysqli_num_rows($b->tampil_kereta3($z))===0){
                                     echo"<script>
                                            alert('nama stasiun tidak ditemukan , searh sesuai stasiun yang ada');
                                             window.location ='menu-usser-kereta.php';
                                          </script>"
                                          ;

                                  }else{
                                  foreach ($b->tampil_kereta3($z) as $data2){
                      ?>             
                                      
                                      <tr style="height:300px">
                                            <td><?=$nomor++?></td>
                                            <td >
                                                  <img style="height: 200px;width:100%;" src="assets/images/<?=$data2['gambar_stasiun']; ?>">
                                            </td>
                                            <td><?=$data2['nama_stasiun']?></td>
                                            <td><?=$data2['kota_asal_kereta']?></td>
                                            <td>  
                                                <form action="" method="post">
                                                    <input type="hidden" name="xc" value="<?= $data2['nama_stasiun']?>">

                                                    <button style="border-radius:20px;width:100px" name="lihat" type="submit"><b>Lihat</b></button>
                                                </form>
                                            </td>
                                      </tr>
                                      
                      <?php   	    }     ?>
                      
                              </table>
                      <?php   	      } ?>
                      <?php	} ?>
                      
                </center>   
          </div> 
        </div>
    </div>
</div>


   
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
<div>
    <div class="container">
      <div class="row">
          <div class="s ection-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                  <center>
                      <?php	
                          if(isset($_POST['lihat'])){ 
                            $b2=$_POST['xc'];
                            $x3=strtoupper($b2);
                            
                      ?>      
                              
                              <h2> <b> JADWAL LINTAS STASIUN  <?=$x3?></b></h2><br>
                              <table class="table table-dark table-striped" style="font-size:23px;width: 95%;">
                                  <thead style="height:80px;">
                                        <td>No</td>
                                        <td>
                                        </td>
                                        <td>Kereta</td>
                                        <td>Tujuan</td>
                                        <td>Jam berangkat</td> 
                                        <td>Harga</td> 
                                        <td>Opsi</td>
                                  </thead>
                      <?php	

                      
                                  
                                      $m= new a();
                                      $nomor=1;
                                   
                                    foreach( $m->tampil_kereta4($b2) as $data2){                             
                      ?>             
                                      <tr style="height:60px">
                                            <td><?=$nomor++?></td>
                                            <td >
                                                  <img style="height: 50px;width:100%;" src="assets/images/<?=$data2['gambar_kereta']; ?>">
                                            </td>
                                            <td><?=$data2['nama_kereta']?></td>
                                            <td><?=$data2['kota_tujuan_kereta']?></td>
                                            <td><?=$data2['jam_berangkat_kereta']?></td>
                                            <td><?=$data2['harga']?></td>
                                            
                                            
                                            <td>  
                                                <form action="pemesanan-kereta.php" method="post">

                                                  <input type="hidden" name="id_kereta" value="<?=$data2['id_kereta']?>">
                                                  
                                                    <button style="border-radius:20px;width:100px" name="pesan" type="submit"><b>pesan</b></button>
                                                </form>
                                            </td>
                                      </tr>
                      <?php   	    }     ?>
                              </table>
                      <?php	}?>     
                </center>   
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 style="color:orange ;"class="modal-title" id="exampleModalLabel"><b> PANDUAN</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <b>
        >> Untuk memesan tiket silahkan search STASIUN keberangkatan  <br>
        >> Lihat jadwal Keberangkatan kereta api <br>
        >> Cek <br>
        >>" Search sesuai nama stasiun yang ada di indonesia"
      </b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin lo out ?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="index.php" class="btn btn-secondary" >iya</a>
      </div>
    </div>
  </div>
</div>
</html>